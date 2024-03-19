<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTransfer extends Model
{
    use HasFactory;

    const TRANSFER_ROLE_FROM = 'from';
    const TRANSFER_ROLE_TO = 'to';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'account_has_transfer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id',
        'transfer_id',
        'role',
    ];

    /**
     * Get the account that the transfer is from.
     */
    public function fromAccount()
    {
        return Account::where('account_id', $this->account_id)
            ->where('role', TRANSFER_ROLE_FROM)
            ->first();
    }

    /**
     * Get the account that the transfer is to.
     */
    public function toAccount()
    {
        return Account::where('account_id', $this->account_id)
            ->where('role', TRANSFER_ROLE_TO)
            ->first();
    }
}