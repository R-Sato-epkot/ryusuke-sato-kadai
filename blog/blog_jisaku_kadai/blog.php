<?php
require_once('dbc.php');

Class Blog extends Dbc
{
    protected $table_name = 'blog';
    public function setCategoryName($category) {
        if ($category === '1') {
            return '日常';
        } elseif ($category === '2') {
            return 'プログラミング';
        } else {
            return 'その他';
        }
    }

    public function blogCreate($blogs) {
        $sql = "INSERT INTO
                    $this->table_name(title, content, category, publish_status)
                VALUES
                    (:title, :content, :category, :publish_status)";
        $dbh = $this->dbConnect();
        $dbh->beginTransaction();
        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':title', $blogs['title'], PDO::PARAM_STR);
            $stmt->bindValue(':content', $blogs['content'], PDO::PARAM_STR);
            $stmt->bindValue(':category', $blogs['category'], PDO::PARAM_INT);
            $stmt->bindValue(':publish_status', $blogs['publish_status'], PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            echo 'ブログを投稿しました!';
        } catch (PODException $e) {
            $dbh->rollBack();
            exit($e);
        }
    }

    public function blogUpdate($blogs) {
        $sql = "UPDATE $this->table_name SET
                    title = :title, content = :content, category = :category, publish_status = :publish_status
                WHERE
                    id = :id";
        $dbh = $this->dbConnect();
        $dbh->beginTransaction();
        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':title', $blogs['title'], PDO::PARAM_STR);
            $stmt->bindValue(':content', $blogs['content'], PDO::PARAM_STR);
            $stmt->bindValue(':category', $blogs['category'], PDO::PARAM_INT);
            $stmt->bindValue(':publish_status', $blogs['publish_status'], PDO::PARAM_INT);
            $stmt->bindValue(':id', $blogs['id'], PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            echo 'ブログを更新しました!';
        } catch (PODException $e) {
            $dbh->rollBack();
            exit($e);
        }
    }

    public function blogValidate($blogs) {
        if (empty($blogs['title'])) {
            exit('タイトルを入力してください');
        }
        if (mb_strlen($blogs['title']) > 191) {
            exit('タイトルは191文字以下にしてください');
        }

        if (empty($blogs['content'])) {
            exit('本文を入力してください');
        }
        if (empty($blogs['category'])) {
            exit('カテゴリーは必須です');
        }
        if ($blogs['category'] !== '1' && $blogs['category'] !== '2') {
            exit('日常かプログラミングのどちらかを選択してください');
        }
        if (empty($blogs['publish_status'])) {
            exit('公開ステータスは必須です');
        }
        if ($blogs['publish_status'] !== '1' && $blogs['publish_status'] !== '2') {
            exit('公開か非公開のどちらかを選択してください');
        }
    }
}

?>
