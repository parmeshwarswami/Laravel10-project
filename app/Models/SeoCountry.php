<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SeoRegion;
use App\Models\SeoCity;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SeoCountry extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['code', 'name', 'region_code', 'region_name', 'url_slug', 'active', 'og_tc_same_to_meta', 'logo_url', 'logo_alt_text', 'meta_title', 'meta_description', 'meta_keywords', 'og_tc_title', 'og_tc_description', 'head_scripts', 'body_scripts', 'body', 'faqs'];

    public function region():BelongsTo
    {
        return $this->belongsTo(SeoRegion::class, 'region_code', 'code');
    }

    public function cities():HasMany
    {
        return $this->hasMany(SeoCity::class, 'country_code', 'code');
    }

}
