<?php

class CustomerDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public DateTimeImmutable $birth_date,
    ) {}
}

$tt = new CustomerDTO('d', 'eee', new DateTimeImmutable());
$tt->email;