<h1>OLA MUNDO</h1>

<form method="POST" action="{{ route('generete.password') }}">
    @csrf
    <div class="row gtr-uniform">
        <div class="col-12">
            <button type="submit" class="btn btn-success">Registrar</button>
        </div>
    </div>
</form>