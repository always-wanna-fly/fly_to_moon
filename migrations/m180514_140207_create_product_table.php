<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180514_140207_create_product_table extends Migration

{
    protected $tn_product = '{{%product}}';
    protected $tn_category = '{{%category}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tn_category, [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);

        $this->createTable($this->tn_product, [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->string(),
            'photo' => $this->string(),
            'count' => $this->integer(),
            'category_id' => $this->integer(),
        ]);

        $this->addForeignKey('product_category_id',
            $this->tn_product,
            'category_id',
            $this->tn_category,
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('product_category_id', $this->tn_product);
        $this->dropTable($this->tn_product);
        $this->dropTable($this->tn_category);
    }
}

