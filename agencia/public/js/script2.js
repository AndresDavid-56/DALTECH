const stripe = Stripe("pk_test_51LyIvTEjngeB0mf0ZWfvJg2ZbA6kHMj2EEpWtYwhSdmnEbCqDqBCg2v4F0XEZqCz9plymFXeRiprEvJKyvzYOIpu00xDaO1C0R")
const btn = document.querySelector('#btn')
btn.addEventListener('click', ()=>{
    fetch('/checkout.php',{
        method:"POST",
        headers:{
            'Content-Type' : 'application/json',
        },
        body: JSON.stringify({})
    }).then(res=> res.json())
    .then(payload => {
        stripe.redirectToCheckout({sessionId: payload.id})
    })
})
