<div id="my-modal-backdrop"class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full"></div>
<div id="my-modal" class="hidden fixed right-0 left-0 mx-auto p-5 border max-w-xs shadow-lg rounded-md bg-white">
	<div class="mt-3 text-center">
		{{-- <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
			<svg
				class="h-6 w-6 text-green-600"
				fill="none"
				stroke="currentColor"
				viewBox="0 0 24 24"
				xmlns="http://www.w3.org/2000/svg"
			>
				<path
					stroke-linecap="round"
					stroke-linejoin="round"
					stroke-width="2"
					d="M5 13l4 4L19 7"
				></path>
			</svg>
		</div>
        --}}
		<h3 id="modal-title" class="text-lg leading-6 font-medium text-gray-900">Successful!</h3>
		<div class="mt-2 px-7 py-3">
			<p id="modal-description" class="text-sm text-gray-500">
				Account has been successfully registered!
			</p>
		</div>
		<div class="items-center px-4 py-3">
			<button
				id="ok-btn"
				class="px-4 py-2 bg-blue-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
			>
				OK
			</button>
		</div>
	</div>
</div>
