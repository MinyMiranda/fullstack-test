<template>
  <b-modal id="bv-modal-contact" hide-footer>
    <b-container>
      <b-row align-h="center">
        <h2 class="card-title text-title-warning">Contact</h2>
      </b-row>
      <b-form @submit="onSubmit" style="padding-left: 20px; padding-right: 20px" id="form-contact">
        <b-form-group id="input-group-1" label="Name" label-for="name">
          <b-form-input id="name" name="name" type="text" required v-model="form.name" placeholder="Fill your full name"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-3" label="E-mail" label-for="email">
          <b-form-input id="email" name="email" type="email" v-model="form.email" placeholder="Fill a valid e-mail"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-4" label="Phone" label-for="phone">
          <b-form-input id="phone" name="phone" type="text" required v-model="form.phone" placeholder="Fill your phone"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-2" label="Post" label-for="message">
          <b-form-textarea id="message" name="message" rows="5" v-model="form.message" placeholder="Hello.."></b-form-textarea>
        </b-form-group>
        <b-row align-h="center">
          <b-button type="submit" variant="dark"> <b-icon icon="caret-right-fill" aria-hiddens="true"></b-icon> Submit</b-button>
        </b-row>
      </b-form>
    </b-container>
  </b-modal>
</template>
<script>
import Api from "../Services/api";
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        phone: "",
        message: "",
      },
    };
  },
  methods: {
    async onSubmit(evt) {
      evt.preventDefault();
      let formData = new FormData($("#form-contact")[0]);
      try {
        await Api.post("/contacts/store", formData);
        this.$swal({ icon: "success", timer: 3000, title: "Mensagem enviada com Suceesso!", showConfirmButton: false });
        this.$root.$emit("bv::hide::modal", "bv-modal-contact");
      } catch (error) {
        console.log(error.response.data.errors);
        console.log(JSON.stringify(error.response.data.errors));
        let errors = "";
        $.each(error.response.data.errors, function (i, dados) {
          errors = errors + "<br>" + dados[0];
        });
        this.$swal({icon: "error", html:errors});
      }
    },
  },
};
</script>
