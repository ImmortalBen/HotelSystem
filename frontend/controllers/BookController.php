<?php

namespace frontend\controllers;

use Yii;
use app\models\Book;
use app\models\Room;
use app\models\BookSearch;
use app\models\RoomSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
{
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
     * Lists all Book models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = null;
        if (!Yii::$app->user->isGuest){
            $name =Yii::$app->user->identity->username;
            if ($name != 'admin'){
                $dataProvider = $searchModel->search([$searchModel->formName()=>['name'=>$name]]);
            }
            else{
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            }
        }
        else{
            return $this->redirect(Yii::$app->homeUrl.'?r=site/login');
        }             
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Book model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Book();      
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionBook_detail($id)
    {
        $model = new Book();
        if (Yii::$app->user->isGuest){
            return $this->redirect(Yii::$app->homeUrl.'?r=site/login'); 
        }      
        if ($model->load(Yii::$app->request->post())) {
            $model->room_id = $id;
            $model->date_create = date('y-m-d', time());
            $room = Room::findOne($id);
            $model->price = $room->price;
            if ($model->save()){
                $room->status = 1;
                $room->name = $model->name;
                $room->id_card = $model->id_card;
                $room->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
           
        } else {
            return $this->render('book_detail', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionBook_list()
    {
        $searchModel = new RoomSearch();
        //$dataProvider = $searchModel->search([$searchModel->formName()=>['status'=>0]]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('book_list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    
    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
