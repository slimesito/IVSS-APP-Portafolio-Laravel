@if (session()->has('success'))
    
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <i class="fa-solid fa-check mb-2"></i> {{ session()->get('success') }}
    </div>

@endif