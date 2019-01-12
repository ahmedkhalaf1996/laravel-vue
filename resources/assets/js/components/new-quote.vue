<template>
	<form @submit.prevent="onSubmitted">
		<div class="form-group">
			<label for="content">Content</label>
			<input 
			 type="text"
			 name="content"
             class="form-control"
             v-model="quoteContent" 
			 >
		</div>
		<button class="btn btn-primary">Submit</button>
	</form>
</template>

<script>
    import axios from 'axios';

	export default {
		data(){
			return {
				quoteContent: ''
			}
		},
		methods: {
			onSubmitted(){
              axios.post('http://laravel-vue/api/quote',
                 {content: this.quoteContent})
              	 .then(
                      (response) => console.log(response)
              	 	)
              	 .catch(
              	 	(error) =>console.log(error)
              	 	)
           this.quoteContent = '';
			}
		}


	};
</script>




