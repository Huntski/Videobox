const account_avatar = document.getElementById("account-avatar")
const account_dropdown = document.getElementById("account-dropdown")

account_avatar.addEventListener('click', (e) => {
    console.log(account_dropdown)
    if (account_dropdown.style.display == 'block') {
        account_dropdown.style.display = 'none'
        return
    }

    account_dropdown.style.display = 'block'
})

document.addEventListener("click", (evt) => {
    let targetElement = evt.target
    do {
        if (targetElement == account_dropdown || targetElement == account_avatar) {
            return
        }
  
        targetElement = targetElement.parentNode
    } while (targetElement)

    account_dropdown.style.display = 'none'
})