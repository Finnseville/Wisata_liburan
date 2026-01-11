document.addEventListener('DOMContentLoaded', () => {

  // Button that opens the modal
  const bayarBtn = document.getElementById('btn-bayar');
  if (!bayarBtn) {
    console.error('btn-bayar not found');
    return;
  }

  bayarBtn.addEventListener('click', () => {
    MicroModal.show('modal-bayar');
  });

  // Buttons inside the modal (QRIS / Bank)
  document.querySelectorAll('.payment-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const method = btn.dataset.method;

      sessionStorage.setItem('payment_method', method);

      // OPTIONAL: close modal before redirect
      MicroModal.close('modal-bayar');

      window.location.href = "../content/berhasil.php";
    });
  });

});
