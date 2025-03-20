const header = document.querySelector('header'),
		hbg = header.querySelector('#hbg')

		hbg.addEventListener('click', e=>{
			e.preventDefault()
			header.classList.toggle('active')
		})

		window.addEventListener('scroll', e=>{
			scrollY > 100 ? header.classList.add('small') : header.classList.remove('small') 
		})
