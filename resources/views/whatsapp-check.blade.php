<h2>نتائج التحقق من أرقام WhatsApp:</h2>

<ul>
    @foreach($result as $item)
        <li>{{ json_encode($item) }}</li>
    @endforeach
</ul>
