<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{

    protected $table='users';
    protected $primaryKey='id';
    protected $useTimestamps  = false; // Zaman damgalarını kullanma

    protected $allowedFields=['email,password']; // Hangi alanlar kullanılabilir


    // Validation kuralları
    protected $validationRules=[
        'email'=>'required|valid_email|is_unique[users.email]',
    'password'=>'required|min_length[8]'
    ];

    // Kullanıcıya özel hata mesajları
    protected $validationMessages=[
        'email'=>[
            'required'=>'Email is required',
            'min_length'=>'Please provide a valid email address',
            'is_unique'=>'This email adress is already taken'
        ],
        'password'=>[
            'required'=>'Email is required',
            'min_length'=>'Password must be at least 8 characters long'
        ]
        ];
    
    // Validasyon hata mesajlarını özelleştir
 protected$skipValidation=false; // Validasyonu atlama



 //validationMessages: Hata mesajlarını özelleştirir. Örneğin, kullanıcı adı için geçerli bir mesaj belirledik.skipValidation: Eğer false ise, her işlemde doğrulama yapılır. Eğer true olursa, doğrulama atlanır.
 
}