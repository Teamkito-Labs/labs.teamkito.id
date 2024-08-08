<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn waves-effect waves-light']) }}>
    {{ $slot }}
</button>
