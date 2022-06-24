		let bomb = document.querySelector(".bomb");
		//let countPrice = document.querySelector(".countPrice");

		let bombInCartLB = 0;
		let bombInCartC = 0;
		let bombInCartB = 0;
		let balmInCart = 0;
		let count = 0;
		//
		let lightBlueBomb = document.querySelectorAll(".lightBlueBomb");
		let cyanBomb = document.querySelectorAll(".cyanBomb");
		let blueBomb = document.querySelectorAll(".blueBomb");
		let balm = document.querySelectorAll(".balm");

		let bombCountLinghtBlueText = document.querySelector(".bombCountLinghtBlue");
		let bombCountCyanText = document.querySelector(".bombCountCyanText");
		let bombCountBlueText = document.querySelector(".bombCountBlueText");
		let balmCountText = document.querySelector(".balmCountText");

		let bombCountLinghtBlue = document.querySelector(".bombCountLinghtBlue");
		let bombCountCyan = document.querySelector(".bombCountCyan");
		let bombCountBlue  = document.querySelector(".bombCountBlue");
		let balmCount = document.querySelector(".balmCount");

		let clearCart = document.querySelector(".clearCart")

		for (let i = 0; i< 2; i++) {
			lightBlueBomb[i].onclick = function(){
				bombInCartLB++;
				bombCountLinghtBlue.innerHTML = bombInCartLB;
				countPrice();
			}

			cyanBomb[i].onclick = function(){
				bombInCartC++;
				bombCountCyan.innerHTML = bombInCartC;
				countPrice();
			}

			blueBomb[i].onclick = function(){
				bombInCartB++;
				bombCountBlue.innerHTML = bombInCartB;
				countPrice();
			}
			balm[i].onclick = function(){
				balmInCart++;
				balmCount.innerHTML = balmInCart
				countPrice();
			}
		}
		

		clearCart.onclick = function(){
			bombInCartLB = 0;
			bombInCartC = 0;
			bombInCartB = 0;
			balmInCart = 0;
			bombCountBlue.innerHTML = bombInCartB;
			bombCountCyan.innerHTML = bombInCartC;
			bombCountLinghtBlue.innerHTML = bombInCartLB;
			balmCount.innerHTML = balmInCart;
			countPrice();
		}


		let bombTotalPrice = 0
		let balmTotalPrice = 0
		let totalPrice = 0;
		let itogo = document.querySelectorAll(".itogo");

		let countPrice = function(){
			if(bombInCartLB != 0 || bombInCartC != 0 || bombInCartB != 0 || balmInCart!=0){
				totalPrice = bombInCartLB * 250 + bombInCartC * 250 + bombInCartB * 250 + balmInCart * 140;
				itogo[0].innerHTML = totalPrice + "р.";
				count = bombInCartLB + bombInCartC + bombInCartB
			}else{
				itogo[0].innerHTML = 0 + "р.";
//править сумму
			}
		}

		let howMuchBombs = document.querySelector(".howMuchBombs")
		let howMuchBalms = document.querySelector(".howMuchBalms")
		let bathBombWord = document.querySelector(".bathBombWord")
		let bathBombWordColor = document.querySelector(".bathBombWordColor")

		let balmWord = document.querySelector(".balmWord")

		let padejBomb = ["бомбочку", "бомбочки", "бомбочек"];
		let padejBalm = ["бальзам", "бальзама", "бальзамов"];
		let padejBombColor = [" голубую ", " голубые ", " бирюзовую ", " бирюзовые ", " синюю ", " синие "];

		let submit = document.querySelector(".submit");
		let chooseAll = document.querySelector(".chooseAll");
		let choosenAll = document.querySelector(".choosenAll");

		let bombDiv  = document.querySelector(".bombDiv");
		let balmDiv  = document.querySelector(".balmDiv");

  
		submit.onclick = function(){
			chooseAll.style.display = "none";
			choosenAll.style.display = "block";
			if(count>0){
				bombDiv.classList.remove("d-none");
				howMuchBombs.innerHTML = count;
				if(count == 1){
					bathBombWord.innerHTML = padejBomb[0]
					if(bombInCartLB == 1){
						bathBombWordColor.innerHTML = padejBombColor[0]
					}else if(bombInCartC == 1){
						bathBombWordColor.innerHTML = padejBombColor[2]
					}else if(bombInCartB == 1){
						bathBombWordColor.innerHTML = padejBombColor[4]						
					}
					
				}else if(count >= 2 && count<5){
					bathBombWord.innerHTML = padejBomb[1]
					if(bombInCartLB == 1){
						bathBombWordColor.innerHTML = padejBombColor[1]
					}else if(bombInCartC == 1){
						bathBombWordColor.innerHTML = padejBombColor[3]
					}else if(bombInCartB == 1){
						bathBombWordColor.innerHTML = padejBombColor[5]						
					}
				}else if(count >= 5){
					bathBombWord.innerHTML = padejBomb[2]
					if(bombInCartLB == 1){
						bathBombWordColor.innerHTML = padejBombColor[1]
					}else if(bombInCartC == 1){
						bathBombWordColor.innerHTML = padejBombColor[3]
					}else if(bombInCartB == 1){
						bathBombWordColor.innerHTML = padejBombColor[5]						
					}
				}else {
					
				}
			}
			if(balmInCart>0){
				balmDiv.classList.remove("d-none");
				howMuchBalms.innerHTML = balmInCart
				
				if(balmInCart==1){
					balmWord.innerHTML = padejBalm[0];
				}else if(count >= 2 && count<5){
					balmWord.innerHTML = padejBalm[1]
				}else if(count >= 5){
					balmWord.innerHTML = padejBalm[2]
				}else {
					
				}
			}

			itogo[1].innerHTML = totalPrice + "р.";


			
		}


		// гифки
		let clicked1 = document.querySelector(".clicked1");
		let clicked2 = document.querySelector(".clicked2");
		let clicked3 = document.querySelector(".clicked3");
		let clicked4 = document.querySelector(".clicked4");

		let click1 = document.querySelector(".click1");
		let click2 = document.querySelector(".click2");
		let click3 = document.querySelector(".click3");
		let click4 = document.querySelector(".click4");

		click1.onclick = function(){
			click1.style.display = "none"
			clicked1.classList.remove("d-none");
		}
		click2.onclick = function(){
			click2.style.display = "none"
			clicked2.classList.remove("d-none");
		}
		click3.onclick = function(){
			click3.style.display = "none"
			clicked3.classList.remove("d-none");
		}
		click4.onclick = function(){
			click4.style.display = "none"
			clicked4.classList.remove("d-none");
		}
		// гифки

		//копировать текст
		$(function() {
		  // copy content to clipboard
		  function copyToClipboard(element) {
		    var $temp = $("<input>");
		    $("body").append($temp);
		    $temp.val($(element).text()).select();
		    document.execCommand("copy");
		    $temp.remove();
		  }

		  // copy coupone code to clipboard
		  $(".coupon-btn").on("click", function() {
		    copyToClipboard("#coupon-field");
		    $(".coupon-alert").fadeIn("slow");
		  });
		});
		//копировать текст
