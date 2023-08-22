<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable; // Import the Billable trait

class Website extends Model
{
    use HasFactory, Notifiable, Billable;
    protected $fillable = ['name', 'url', 'wordpress_id', 'user_id'];

    public function taxPercentage() {
        return 21;
    }
    public function mollieCustomerFields() {
        return [
            'email' => $this->email,
            'name' => $this->name,
        ];
    }
    
    /**
    * Get the receiver information for the invoice.
    * Typically includes the name and some sort of (E-mail/physical) address.
    *
    * @return array An array of strings
    */
    public function getInvoiceInformation()
    {
        return [$this->name, $this->email];
    }
    
    /**
    * Get additional information to be displayed on the invoice. Typically a note provided by the customer.
    *
    * @return string|null
    */
    public function getExtraBillingInformation()
    {
        return null;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function checklist()
    {
        return $this->hasOne(Checklist::class);
    }
}
