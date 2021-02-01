// Const definition 
const contactBtn1Next = document.querySelector("#contact_btn-1-next")
const contactBtn2Prev = document.querySelector("#contact_btn-2-prev")
const contactBtn2Next = document.querySelector("#contact_btn-2-next")
const contactBtn3Prev = document.querySelector("#contact_btn-3-prev")
const contactBtn3Send = document.querySelector("#contact_btn-3-send")

// Next button listener of form 1
contactBtn1Next.addEventListener("click", function(e) {
  gotoNextForm(contactBtn1Next, contactBtn2Next, 1, 2)
  e.preventDefault()
})

// Previous button listener of form 2
contactBtn2Prev.addEventListener("click", function(e) {
  gotoNextForm(contactBtn2Prev, contactBtn1Next, 2, 1)
  e.preventDefault()
})

// Next button listener of form 2
contactBtn2Next.addEventListener("click", function(e) {
  gotoNextForm(contactBtn2Next, contactBtn3Send, 2, 3)
  e.preventDefault()
})

// Previous button listener of form 3
contactBtn3Prev.addEventListener("click", function(e) {
  gotoNextForm(contactBtn3Prev, contactBtn2Prev, 3, 2)
  e.preventDefault()
})

const gotoNextForm = (prev, next) => {
  // Get form through the button
  const prevForm = prev.parentElement
  const nextForm = next.parentElement
  // Add active/inactive classes to both previous and next form
  nextForm.classList.add("form-active")
  nextForm.classList.add("form-active-animate")
  prevForm.classList.add("form-inactive")
  // Remove active/inactive classes to both previous an next form
  setTimeout(() => {
    prevForm.classList.remove("form-active")
    prevForm.classList.remove("form-inactive")
    nextForm.classList.remove("form-active-animate")
  }, 1)
}