let input = document.getElementById('filtro')

filtro.addEventListener('keyup', () => {
  let filter = input.value.toLowerCase()
  let tbody = document.querySelector('tbody')
  let tr = tbody.getElementsByTagName('tr')

  for (let i = 0; i < tr.length; i++) {
    let visible = false
    let td = tr[i].getElementsByTagName('td')

    for (let j = 0; j < td.length; j++) {
      if (td[j] && td[j].innerHTML.toLowerCase().indexOf(filter) > -1) {
        visible = true
      }
    }

    if (visible === true) {
      tr[i].style.display = ''
    } else {
      tr[i].style.display = 'none'
    }
  }
})
