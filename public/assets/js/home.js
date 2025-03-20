const substainable = document.querySelector('#substainable'),
		sliderContainer = substainable.querySelector('.slider'),
		arrows = sliderContainer.querySelectorAll('.arrow'),
		slider = sliderContainer.querySelector('.slides'),
		slides = slider.querySelectorAll('.slide')
        
		let x,
		scrollLeft,
		slideWidth = slides[0].scrollWidth + 20,
		index = 0,
		imgDisplayed = window.innerWidth < 1000 ? 3 : 2

	
		

		window.addEventListener('resize',e=>{
			imgDisplayed = window.innerWidth < 1000 ? 3 : 2
			slideWidth = slides[0].scrollWidth + 20
			index = Math.round(slider.scrollLeft / slideWidth)
			slider.scrollLeft = index * slideWidth
		})

		arrows.forEach( arrow=> {
			arrow.addEventListener('click',e=>{
				e.currentTarget.classList.contains('right') ? index-- : index++
				index > slides.length - imgDisplayed ? index = 0 : ''
				index < 0 ? index = slides.length - imgDisplayed : ''
				slider.scrollLeft = index * slideWidth


			})
		});

		function stopDrag(e){
			slider.classList.remove('active')
			index = Math.round(slider.scrollLeft / slideWidth)
			slider.scrollLeft = index * slideWidth
			slider.removeEventListener('mouseup', stopDrag)
			slider.removeEventListener('mouseleave', stopDrag)
			slider.removeEventListener('mousemove', dragging)

			slider.removeEventListener('touchend', stopDrag)
			slider.removeEventListener('touchmove', dragging)
		}


		function dragging(e){
			
			const deviation = (e.pageX || e.touches[0].clientX) - x
			slider.scrollLeft = scrollLeft - deviation
		}

		function startDrag(e){
			e.preventDefault()
			slider.classList.add('active')
			x = e.pageX || e.touches[0].clientX
			scrollLeft = slider.scrollLeft
			slider.addEventListener('mousemove', dragging)
			slider.addEventListener('mouseup', stopDrag)
			slider.addEventListener('mouseleave', stopDrag)

			slider.addEventListener('touchmove', dragging)
			slider.addEventListener('touchend', stopDrag)
		}

		slider.addEventListener('mousedown', startDrag)
		slider.addEventListener('touchstart', startDrag)