<form action="{{ route('donations.store') }}" method="POST">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" required>
    
    <label for="description">Descrição:</label>
    <textarea name="description" required></textarea>
    
    <label for="donation_type">Tipo da Doação:</label>
    <select name="donation_type" required>
        <option value="">Selecione</option>
        <option value="Alimento">Alimento</option>
        <option value="Roupas">Roupas</option>
        <option value="Dinheiro">Dinheiro</option>
        <!-- Adicione mais tipos de doação conforme necessário -->
    </select>

    <label for="name_ong">Nome da Ong:</label>
    <input type="text" name="name_ong" required>

    <label for="chave_pix">Chave Pix:</label>
    <input type="text" name="chave_pix" required>
    
    <button type="submit">Criar Doação</button>
</form>
