
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
				jQuery('#meuForm').submit(function(){

						var dados = jQuery( this ).serialize();

						$.ajax({

							url: '../template/funcionario/cadastro.php',
							cache: false,
							data: dados,
							type: "POST",

                            success: function(msg){
										document.getElementById('status').innerHTML = msg;

										document.getElementById('status').style.background = '#000';
							}
						})
				event.preventDefault();
				});
			}); 
</script>


<style>
		.animated {
			-webkit-animation-duration: 0;
			animation-duration: 0;
			-webkit-animation-fill-mode:  both;
			animation-fill-mode: both;
		}

		.animated.faster {
			-webkit-animation-duration: 0ms;
			animation-duration: 0ms;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 0;
			}
		}

		@keyframes fadeOut {
			from {
				opacity:0;
			}

			to {
				opacity: 0;
			}
		}
	</style>

	<div>
		<button onclick="openModal()" class='rounded-lg absolute top-0 right-0  bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-2 md:px-4'>cadastrar</button>
	</div>

	<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Cadastrar Funcionario</p>
					<div class="modal-close cursor-pointer z-50">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<section id="segura-items">
					<form method="POST" id="meuForm" class="bg-white shadow-md rounded w-full px-10 pt-6 pb-8 mb-4">

					    <div class="flex flex-wrap -mx-3 mb-6">
							<div class="w-full px-3">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Nome </label>
							<input class=" appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="nome" placeholder="Nome Completo"  required/>
							</div>
						</div>
                        <div class="flex flex-wrap -mx-3 mb-6">
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Matricula </label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" placeholder="Matricula" name="matricula" required>
							</div>
							<div class="w-full md:w-1/2 px-3">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Cpf </label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="number" placeholder="Cpf" name="cpf" required>
							</div>
							<div class="w-full md:w-1/2 px-3">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Idade </label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="number" placeholder="idade" name="idade" required>
							</div>
							
					    </div>
                      
						<div class="flex flex-wrap -mx-3 mb-2">
							<div class="w-full md:w-1/2 px-2 mb-6 md:mb-0">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Setor </label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Setor" name="setor" required>
							</div>
							<div class="w-full md:w-1/2 px-6 mb-4 md:mb-0">
							<label class="appearance-none block text-xl  text-gray-600  rounded py-1 px-2 leading-tight 0">Função </label>
								<div class="relative">
									<select name="funcao" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  required>

											<option value="">Função</option>

											<option value="Aux de Frota">Aux de Frota</option>

											<option value="Aux de Qualidade">Aux de Qualidade</option>

											<option value="Inspetor">Inspetor</option>

											<option value="Supervisor ">Supervisor</option>

											<option value="Mecanico">Mecanico</option>

											<option value="Ass de Frota">Ass de Frota</option>

											<option value="Ass de Qualidade">Ass de Qualidade</option>

											<option value="Motorista">Motorista</option>
										</select>
									<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
									<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
									</div>
								</div>
							</div>
						</div>
     
						
						<div class="flex items-center justify-between">
							<input class="modal-close bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Enviar" @click="open = false">
						</div>
						
					</form>
				</section>
					<span id="status"></span>
			</div>
		</div>
	</div>
	

	<script>
		const modal = document.querySelector('.main-modal');
		const closeButton = document.querySelectorAll('.modal-close');

		const modalClose = () => {
			modal.classList.remove('fadeIn');
			modal.classList.add('fadeOut');
			setTimeout(() => {
				modal.style.display = 'none';
			}, 500);
		}

		const openModal = () => {
			modal.classList.remove('fadeOut');
			modal.classList.add('fadeIn');
			modal.style.display = 'flex';
		}

		for (let i = 0; i < closeButton.length; i++) {

			const elements = closeButton[i];

			elements.onclick = (e) => modalClose();

			modal.style.display = 'none';

			window.onclick = function (event) {
				if (event.target == modal) modalClose();
			}
		}


	</script>