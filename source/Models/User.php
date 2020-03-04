<?php

namespace source\Models;
use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer {

    public function __construct() {
        // string $entity, array $required, string $primary = 'id', bool $timestamps = true
        parent::__construct("users", [
            "nome",
            "Snome",
            "nasc",
            "cpf",
            "logradouro",
            "complemento",
            "Bairro",
            "uf",
            "NumCasa",
            "email",
            "pass"
        ]);
    }

    public function save(): bool
    {
        // Está polimorfando a classe datalayer para aplicar a regra de negocio da minha aplicação
        parent::save();
    }


}


