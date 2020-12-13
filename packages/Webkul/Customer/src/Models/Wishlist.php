<?php

namespace Webkul\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Core\Models\ChannelProxy;
use Webkul\Product\Models\ProductProxy;
use Webkul\Customer\Contracts\Wishlist as WishlistContract;

class Wishlist extends Model implements WishlistContract
{
    protected $table = 'wishlist';

    protected $casts = [
        'additional' => 'array',
    ];

    protected $fillable = [
        'channel_id',
        'product_id',
        'customer_id',
        'additional',
        'moved_to_cart',
        'shared',
        'time_of_moving'
    ];

    /**
     * The Product that belong to the wishlist.
     */
    public function product()
    {
        return $this->hasOne(ProductProxy::modelClass(), 'id', 'product_id');
    }

    public function channel(){ //TODO pull request
        return $this->belongsTo(ChannelProxy::modelClass());
    }

    public function customer(){ //TODO pull request
        return $this->belongsTo(CustomerProxy::modelClass());
    }
}
