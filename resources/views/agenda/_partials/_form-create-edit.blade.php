@csrf
<div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" name="nome" value="{{ $contato->nome ?? @old('nome') }}" class="form-control">
</div>
<div class="form-group">
    <label for="">Sobrenome</label>
    <input type="text" name="sobrenome" value="{{ $contato->sobrenome ?? @old('sobrenome') }}" class="form-control">
</div>
<div class="form-group">
    <label for="">Telefone</label>
    <input type="text" name="telefone" value="{{ $contato->telefone ?? @old('telefone') }}" class="form-control">
</div>
<div class="form-group">
    <label for="foto">Foto</label>
    <input type="file" name="foto" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>