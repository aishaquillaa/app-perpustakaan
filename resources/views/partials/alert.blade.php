@if(session('success'))
    <div style="max-width: 1000px; margin: 0 auto 10px; padding: 0 20px;">
        <div style="background-color: #d1fae5; color: #065f46; border: 1px solid #a7f3d0; padding: 12px 16px; border-radius: 8px; font-weight: 500;">
            ✓ {{ session('success') }}
        </div>
    </div>
@endif