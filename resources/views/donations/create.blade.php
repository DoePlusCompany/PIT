<form action="{{ route('donations.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" required>
    
    <label for="description">Descrição:</label>
    <textarea name="description" required></textarea>
    
    <label for="donation_type">Tipo da doeação:</label>
    <input type="text" name="donation_type" required>
    
    <button type="submit">Criar Doação</button>
</form>
