<?php

namespace Ellite\Products\Models;

use App\Ellite\ElliteModel;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class ProductApplication extends ElliteModel implements TranslatableContract
{
    use Translatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'active',
        'order',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products_applications';

    public $translatedAttributes = [
        'title',
    ];
    
    public function image() {
        return $this->attachment('image_product_application');
    }

    public function getLogName()
    {
        return $this->name;
    }
    
    public static function getEntityNameSingular()
    {
        return 'aplicação';
    }

    public static function getEntityNamePlural()
    {
        return 'aplicações';
    }

    public static function getArticle()
    {
        return 'a';
    }
}
