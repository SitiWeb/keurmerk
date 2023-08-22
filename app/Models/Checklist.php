<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'website_id',
        'published',
        'identity',
        'companyInfo',
        'complaints',
        'odr',
        'rightToWithdraw',
        'privacyPolicy',
        'cookiePolicy',
        'dataRights',
        'privacyHandling',
        'logicalContactInfo',
        'telefoonnummer',
        'adres',
        'emailadres',
        'logicalKVK',
        'logicalBTW',
        'retourrechtsgeldig',
        'retourprocedure',
        'klachtrechtsgeldig',
        'inbtw',
        'optional_fields',
        'newsletter_option',
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
