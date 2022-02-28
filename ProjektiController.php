<?php

namespace app;

use app\models\Partneri;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjektiController implements the CRUD actions for Partneri model.
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
     * Lists all Partneri models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Partneri::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id_partneri' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Partneri model.
     * @param int $id_partneri Id Partneri
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_partneri)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_partneri),
        ]);
    }

    /**
     * Creates a new Partneri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Partneri();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_partneri' => $model->id_partneri]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Partneri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_partneri Id Partneri
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_partneri)
    {
        $model = $this->findModel($id_partneri);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_partneri' => $model->id_partneri]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Partneri model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_partneri Id Partneri
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_partneri)
    {
        $this->findModel($id_partneri)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Partneri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_partneri Id Partneri
     * @return Partneri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_partneri)
    {
        if (($model = Partneri::findOne(['id_partneri' => $id_partneri])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
