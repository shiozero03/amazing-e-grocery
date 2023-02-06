<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ' :attribute harus diterima.',
    'array' => ' :attribute harus berupa array.',
    'confirmed' => 'Konfirmasi atribut :value tidak sama.',
    'current_password' => 'Password tidak sesuai.',
    'date' => ' :attribute harus berupa tanggal yang valid.',
    'date_format' => ' :attribute tidak sesuai dengan format :date .',
    'email' => ' :attribute tidak valid.',
    'image' => ' :attribute harus berupa gambar.',
    'max' => [
        'numeric' => ' :attribute maksimal terdiri dari :max angka.',
        'file' => ' :attribute maksimal terdiri dari :max kb.',
        'string' => ' :attribute maksimal terdiri dari :max karakter.',
        'array' => ' :attribute maksimal terdiri dari :max item.',
    ],
    'min' => [
        'numeric' => ' :attribute minimal terdiri dari :min angka.',
        'file' => ' :attribute minimal terdiri dari :min kb.',
        'string' => ' :attribute minimal terdiri dari :min karakter.',
        'array' => ' :attribute minimal terdiri dari :min item.',
    ],
    'numeric' => ' :attribute harus berupa angka.',
    'password' => 'Password salah',
    'required' => ' :attribute harus diisi.',
    'same' => ' :attribute harus sama dengan :other .',
    'size' => [
        'numeric' => ' :attribute harus memiliki ukuran :size .',
        'file' => ' :attribute harus memiliki ukuran :size  kb.',
        'string' => ' :attribute harus memiliki ukuran :size  karakter.',
        'array' => ' :attribute harus memiliki ukuran :size  item.',
    ],
    'unique' => ' :attribute telah digunakan.',
    'uploaded' => ' :attribute gagal diupload.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
