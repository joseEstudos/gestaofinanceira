@extends('layout')
@section('content')

    <div class="ui tag label">Lançamentos ajustes mais ++++++</div></br>
    </br>
    <form class="ui form" action="/lacamentos_ajustesMais_a">

        <div class="field">
            <label>Data Registro</label>
            <input id="date_ajustesMais" type="date" name="data_reg">
        </div>
        <div class="field">
            <label>Valor</label>
            <input name="valor" id="currency" type="text" onkeyup="k(this);">
        </div>
        <div class="field">
            <label>Descrição</label>
            <input name="descricao" type="text" name="last-name" placeholder="Descrição">
        </div>

        <button class="ui button" type="submit">Salvar</button>
    </form>

@stop
