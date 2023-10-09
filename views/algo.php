$category= $product->category_id;
$id= $product_detail->slug;
$bids User::whereHas('bids', function ($query) use($category) {
    = $query->where(function($query) use($category){
        $query->whereHas ('product', function($q) use($category) {
            $q->where('category_id', $category);
        });
    });
})
->with('bids.product')
->get();
$bids->each(function ($item, $key) use($id) {
    $item->email && $email = $item->email;
    $mailData = [
        'title' => 'Email',
        'url' => 'localhost:8080/products/'. $id .'/',
    ];
    Mail::send('emails.email', ['mail'=>$mailData], function($message) use($email){
        $message->to ($email);
        $message->from('samip@example.com');
        $message->subject ('Hello from me');
    });
});