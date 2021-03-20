<main>

    <section>
        <a  href="cadastrar.php" class="btn btn-success">
            Voltar
        </a>
    </section>

    <h2 class="mt-3">Cadastrar Vaga</h2>
    <form method='post'>

        <div class='form-group'>
            <label>Titulo</label>
            <input type='text' class='form-control' name='titulo'>
        </div>

        <div class='form-group'>
            <label>Descrição</label>
            <textarea class='form-control' name='descricao' rows='5'></textarea>
        </div>

        <div class='form-group'>
            <label>Status</label>
            
            <div>

                <div class='form-check form-check-inline'>
                    <label class='form-control'>
                        <input type='radio' name='ativo' value='s' checked>Ativo
                    </label>                
                </div>
                
                <div class='form-check form-check-inline'>
                    <label class='form-control'>
                        <input type='radio' name='ativo' value='n'>Inativo
                    </label>                
                </div>

            </div>
        </div>

        <div class='form-group'>
            <button type='submit' class='btn btn-primary'>Enviar</button>
        </div>
    </form>
</main>