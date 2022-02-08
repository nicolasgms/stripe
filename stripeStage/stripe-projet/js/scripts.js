window.onload = () => {
    // Variaveis
    let stripe = Stripe('pk_test_51J0nxYCLT1FinbvmKPoRFe7t1ppQQypAh0Nv8CescymTN87eF4BT44xwI5ciQLr2itgqvM22lQjqCFjoDoEl5nel00JVVvEkxk')
    let elements = stripe.elements()
    let redirect = "/stripe-projet"

    // Objetos de página
    let cardHolderName = document.getElementById("cardholder-name")
    let cardButton = document.getElementById("card-button")
    let clientSecret = cardButton.dataset.secret;

    // criamos os elementos do formulário do cartão do banco
    let card = elements.create("card")
    card.mount("#card-elements")

    //gerenciamos a apreensão
    card.addEventListener("change", (event) => {
        let displayError = document.getElementById("card-errors")
        if(event.error){
            displayError.textContent = event.error.message;
        }else{
            displayError.textContent = "";
        }
    })

    // gerenciamos a pagamento
    cardButton.addEventListener("click", () => {
        stripe.handleCardPayment(
            clientSecret, card, {
                payment_method_data: {
                    billing_details: {name: cardHolderName.value}
                }
            }
        ).then((result) => {
            if(result.error){
                document.getElementById("errors").innerText = result.error.message
            }else{
                document.location.href = redirect
            }
        })
    })

}