// Const definition 
const portfolioBtn1Next = document.querySelector("#portfolio_btn-1-next")
const portfolioBtn2Next = document.querySelector("#portfolio_btn-2-next")
const portfolioBtn3Next = document.querySelector("#portfolio_btn-3-next")
const portfolioBtn4Next = document.querySelector("#portfolio_btn-4-next")

// Next button listener of project 1
portfolioBtn1Next.addEventListener("click", function(e) {
  gotoNextProject(portfolioBtn1Next, portfolioBtn2Next, 1, 2)
  e.preventDefault()
})

// Next button listener of project 2
portfolioBtn2Next.addEventListener("click", function(e) {
  gotoNextProject(portfolioBtn2Next, portfolioBtn3Next, 2, 3)
  e.preventDefault()
})

// Next button listener of project 3
portfolioBtn3Next.addEventListener("click", function(e) {
  gotoNextProject(portfolioBtn3Next, portfolioBtn4Next, 3, 4)
  e.preventDefault()
})

// Next button listener of project 4
portfolioBtn4Next.addEventListener("click", function(e) {
  gotoNextProject(portfolioBtn4Next, portfolioBtn1Next, 4, 1)
  e.preventDefault()
})


const gotoNextProject = (prev, next) => {
  // Get form through the button
  const prevProject = prev.parentElement
  const nextProject = next.parentElement
  // Add active/inactive classes to both previous and next form
  nextProject.classList.add("article_portfolio-active")
  prevProject.classList.add("article_portfolio-inactive")
  // Remove active/inactive classes to both previous an next form
  setTimeout(() => {
    prevProject.classList.remove("article_portfolio-active")
    prevProject.classList.remove("article_portfolio-inactive")
  }, 1)
}