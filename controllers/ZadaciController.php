<?php

namespace app\controllers;

use app\models\KlasnaOznaka;
use app\models\OdgovornaOsoba;
use app\models\Partneri;
use app\models\Prioriteti;
use app\models\Projekti;
use app\models\Statusi;
use app\models\Tura;
use app\models\zadaci;
use app\zadaciQuery;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ZadaciUraditi;

/**
 * ZadaciController implements the CRUD actions for zadaci model.
 */
class ZadaciController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all zadaci models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new zadaciQuery();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single zadaci model.
     * @param int $id_zadatak Id Zadatak
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_zadatak)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_zadatak),
        ]);
    }

    /**
     * Creates a new zadaci model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new zadaci();
        $turaarray= ArrayHelper::map(Tura::find()->all(),'id_tura', 'ime_tura' );
        $zadaciuraditiarray= ArrayHelper::map(ZadaciUraditi::find()->all(),'id', 'ime' );
        $prioritetarray = ArrayHelper::map(Prioriteti::find()->all(),'id_prioritet', 'ime_prioritet' );
        $statusarray = ArrayHelper::map(Statusi::find()->all(),'id_status', 'ime_status' );
        $partnerarray = ArrayHelper::map(Partneri::find()->all(),'id_partneri', 'Ime' );
        $projektarray = ArrayHelper::map(Projekti::find()->all(),'id', 'Naziv_Projekta' );
        $odgovornaOsobaarray = ArrayHelper::map(OdgovornaOsoba::find()->all(),'ID_odgovorna_osoba', 'Ime' );
                        
        $model2 = new ZadaciUraditi();
        
        
        if ($this->request->isPost && isset($this->request->post()["ZadaciUraditi"]["status"]) != "") {
            
            $dbid = ZadaciUraditi::find()->max('id');
            $model2->id = $dbid + 1;
            
            if ($model2->load($this->request->post()) && $model2->save()) {
                
                return $this->render('create', [
            'model' => $model,
            'turaarray' => $turaarray,
            'prioritetarray' => $prioritetarray,
            'statusarray' => $statusarray,
            'partnerarray' => $partnerarray,
            'projektarray' => $projektarray,
            'odgovornaOsobaarray' => $odgovornaOsobaarray,
            'zadaciuraditiarray' => $zadaciuraditiarray,
            'model2' => $model2,
                ]);
                
            }
        } else if(1 != 1){
            $model2->loadDefaultValues();
        }        
              
                
        if ($this->request->isPost) {
            
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_zadatak' => $model->id_zadatak]);
            }
        } else {
            $model->loadDefaultValues();
        }
        
        return $this->render('create', [
            'model' => $model,
            'turaarray' => $turaarray,
            'prioritetarray' => $prioritetarray,
            'statusarray' => $statusarray,
            'partnerarray' => $partnerarray,
            'projektarray' => $projektarray,
            'odgovornaOsobaarray' => $odgovornaOsobaarray,
            'zadaciuraditiarray' => $zadaciuraditiarray,
            'model2' => $model2,

        ]);
    }

    /**
     * Updates an existing zadaci model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_zadatak Id Zadatak
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_zadatak)
    {
        $model = $this->findModel($id_zadatak);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_zadatak' => $model->id_zadatak]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing zadaci model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_zadatak Id Zadatak
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_zadatak)
    {
        $this->findModel($id_zadatak)->status_id = 3;
       // $this->findModel($id_zadatak)->delete();

        return $this->redirect(['index']);
    }

    /**
     * @return string|void
     * ajax call for selection
     */
    public function actionSelect(){
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
            // $Id =  $data['id'];
            var_dump($data['id']);die;
            return $Id;
        }
        return "proslo";
    }

    /**
     * Finds the zadaci model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_zadatak Id Zadatak
     * @return zadaci the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_zadatak)
    {
        if (($model = zadaci::findOne(['id_zadatak' => $id_zadatak])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
