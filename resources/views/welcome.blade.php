<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
      <form  action="{{ route('invoice.store') }}" method="post">
        @method('POST')
        @csrf
        <label for="date_invoice">Data Fattura</label>
        <input type="date" name="date_invoice" value=""><br>
        <label for="num_invoice">Numero Fattura</label>
        <input type="number" name="num_invoice" value=""><br>
        <label for="id_customer">Num Cliente</label>
        <input type="number" name="id_customer" value=""><br>
        <label for="description">Descrizione</label>
        <input type="text" name="description" value=""><br>
        <label for="quantity">Quantità</label>
        <input type="number" name="quantity" value=""><br>
        <label for="amount">Importo</label>
        <input type="number" name="amount" value=""><br>
        <label for="amountIva">Importo IVA</label>
        <input type="number" name="amountIva" value=""><br>
        <label for="TotAmountIva">Totale + IVA</label>
        <input type="number" name="TotAmountIva" value=""><br>
        <input type="submit" name="submit" value="Registra">

      </form>
    </body>
</html>
