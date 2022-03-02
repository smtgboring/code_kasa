<?php


namespace app\controllers;

use app\models\KlasnaOznaka;
use app\models\OdgovornaOsoba;
use app\models\Partneri;
use app\models\PartneriQuery;
use app\models\Projekti;
use app\ProjektiQuerry;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * ProjektiController implements the CRUD actions for Projekti model.
 */
class ProjektiController extends Controller
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
     * Lists all Projekti models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProjektiQuerry();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $users= $dataProvider;
        $model = new Projekti();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Projekti model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $odgovornaOsoba=OdgovornaOsoba::findOne($this->findModel($id)["Odgovorna_Osoba_id"])["Ime"];
        $klasnaOznaka=KlasnaOznaka::findOne($this->findModel($id)["Klasna_Oznaka_id"])["Klasna_Oznaka"];

        return $this->render('view', [
            'model' => $this->findModel($id),
            'odgovornaOsoba'=> $odgovornaOsoba,
            'klasnaOznaka' => $klasnaOznaka,
        ]);
    }

    /**
     * Creates a new Projekti model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $searchModel = new ProjektiQuerry();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $klasnaOznakaArray= ArrayHelper::map(KlasnaOznaka::find()->all(),'ID_klasna_oznaka', 'Klasna_Oznaka' );
        $odgovornaOsoba= ArrayHelper::map(OdgovornaOsoba::find()->all(),'ID_odgovorna_osoba', 'Ime' );
        $model = new Projekti();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $model->refresh();
                $model= new Projekti();

                return $this->render('index',
                    [
                    'odgovornaOsoba'=> $odgovornaOsoba,
                    'klasnaOznakaArray' => $klasnaOznakaArray,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'model'=>$model,
                ]);
            }
        } else {

            $model->loadDefaultValues();
        }


        return $this->renderAjax('create', [
            'model' => $model,
            'klasnaOznakaArray' => $klasnaOznakaArray,
            'odgovornaOsoba' => $odgovornaOsoba,
        ]);
    }

    /**
     * Updates an existing Projekti model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);
        $klasnaOznaka=KlasnaOznaka::find()->all();
        $klasnaOznakaArray= ArrayHelper::map(KlasnaOznaka::find()->all(),'ID_klasna_oznaka', 'Klasna_Oznaka' );
        $odgovornaOsoba=OdgovornaOsoba::find()->all();
        $odgovornaOsoba= ArrayHelper::map(OdgovornaOsoba::find()->all(),'ID_odgovorna_osoba', 'Ime' );
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index', ['id' => $model->id],
                'odgovornaOsoba'=> $odgovornaOsoba,
                'klasnaOznakaArray' => $klasnaOznakaArray]);
        }

        return $this->render('update', [
            'model' => $model,
            'odgovornaOsoba'=> $odgovornaOsoba,
            'klasnaOznakaArray' => $klasnaOznakaArray
        ]);
    }

    /**
     * Deletes an existing Projekti model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Projekti model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Projekti the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Projekti::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

