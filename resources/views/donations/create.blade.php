<form action="{{ route('donations.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" required>
    
    <label for="description">Descrição:</label>
    <textarea name="description" required></textarea>
    
    <label for="donation_type">Tipo da doeação:</label>
    <input type="text" name="donation_type" required>

    <label for="name_ong">Nome da Ong:</label>
    <input type="text" name="name_ong" required>

    <label for="chave_pix">Chave pix:</label>
    <input type="text" name="chave_pix" required>
    
    
    
    <button type="submit">Criar Doação</button>
</form>
