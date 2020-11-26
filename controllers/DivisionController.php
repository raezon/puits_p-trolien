<?php

namespace app\controllers;

use Yii;
use app\models\Divisionexploration;
use app\models\Form;
use app\models\DivisionexplorationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use autoload;

/**
 * DivisionController implements the CRUD actions for Divisionexploration model.
 */
class DivisionController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Divisionexploration models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DivisionexplorationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Divisionexploration model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Divisionexploration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAll(){
        $model = Divisionexploration::find()->andwhere([])->all();
        return $this->render('all_division', [
            'model' => $model,
        ]);
    }
    public function actionCreate()
    {
        $model = new Form();
        $model2= new Divisionexploration();
        if ($model->load(Yii::$app->request->post())) {
            $pdf =array();
            $pdf[]=$model->pdf;
           // print_r($_FILES);
            $name=$_FILES["Form"]["tmp_name"]["pdf"][0];
            $parser = new \Smalot\PdfParser\Parser();
            $pdf    = $parser->parseFile($name);
            // Retrieve all pages from the pdf file.
            $pages  = $pdf->getPages();
            // Loop over each page to extract text.
            $text=(string)$pdf->getText();
            $text=substr($text,20);
            $text = explode('. ', $text);
            //echo '<pre>'.print_r($text).'</pre>';
            $division=array();
            foreach($text as $element){
                $element = explode(':', $element);
                $division[]=$element[1];

            }
            //creating and saving our product
           // $model2->id_puits =$division[1];
            $newId = Divisionexploration::find()->max('id_puits') + 1;

            $model2->id_puits =$newId;
            $model2->nom_puits =$division[2];
            $model2->nom_reservoir =$division[3];
            $model2->le_groupe_Exploitant=$division[4];
            $model2->latitude =$division[5];
            $model2->longitude=$division[6];
            $model2->bloc =$division[7];
            $model2->zone =$division[8];
            $model2->bassin=$division[9];
            $model2->phase =$division[10];
            $model2->date_debut=$division[11]; 
            $model2->date_fin =$division[12];
            if($model2->save()){

            }else{
               
                print_r($model2->getErrors());
                die();
            }
            return $this->redirect(['view', 'id' =>$model2->id_puits]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Divisionexploration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_puits]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Divisionexploration model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Divisionexploration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Divisionexploration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Divisionexploration::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
