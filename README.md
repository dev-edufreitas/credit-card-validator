# Validador de Cartão de Crédito
Exemplo de funcionamento [Web](#web)<br>
<br>
<img src="https://i.ibb.co/t4YHPJ1/validcreditcard.png" width="333"/> <img src="https://i.ibb.co/YfsFgRm/validcreditcard2.png" width="333"/>
<img src="https://i.ibb.co/4fY5NH5/validcreditcard3.png" width="333"/>


## Descrição

Este é um projeto simples para validar números de cartão de crédito. Ele pode ser utilizado tanto como uma API quanto como uma aplicação web.
Aqui foi utilizado o Algoritmo de Luhn, para fazer a validação e verificação desse cartão.

## Índice

- [Instalação](#instalação)
- [Uso](#uso)
  - [API](#api)
  - [Web](#web)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Contribuição](#contribuição)
- [Licença](#licença)

## Instalação

```bash
git clone https://github.com/dev-edufreitas/credit-card-validator.git
cd credit-card-validator
composer install
```

## Uso

### API

Para validar um número de cartão de crédito através da API, faça uma requisição POST para o endpoint `/api/validateCreditCard`. Você deve incluir um campo `credit_card_number` no corpo da requisição:

```bash
curl -X POST -d "credit_card_number=1234567812345678" http://localhost/api/validateCreditCard
```

A resposta será um objeto JSON contendo os campos `valid` e `brand`, que representam a validade e a bandeira do cartão de crédito, respectivamente:

```json
{
    "valid": true,
    "brand": "Visa"
}
```

### Web

Para usar a interface web, basta abrir seu navegador e ir para `http://localhost`.

## Tecnologias Utilizadas

- Laravel

