<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    protected $fillable = [
        'etat',
        'produit_id',
        'client_id',
    ];






}

/*


id
etat
id_produit
id_client
	
Edit Edit
Copy Copy
Delete Delete
1
0
1
1



*/