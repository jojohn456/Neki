<template>
  <q-page>
    <div class="row">
      <div class="col-12 flex justify-center items-center">
        <div class="card bg-base-100 max-w-[500px] w-full shadow-xl mt-[10%]">
          <div class="card-body">
            <h2 class="card-title justify-center" align="center">SignUp</h2>
            <Form
              @submit="onSubmit"
              v-bind:validation-schema="schema"
              v-slot="{ errors }"
            >
              <span class="errors">{{ errors.firstname }}</span>
              <label class="input input-bordered flex items-center gap-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="h-4 w-4 opacity-70"
                >
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z"
                  />
                </svg>
                <Field
                  name="firstname"
                  class="grow"
                  v-model="data.firstname"
                  v-bind="firstnameAttrs"
                  type="text"
                  placeholder="FirstName"
                />
              </label>
              <span class="errors">{{ errors.lastname }}</span>
              <label class="input input-bordered flex items-center gap-2 mt-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="h-4 w-4 opacity-70"
                >
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z"
                  />
                </svg>
                <Field
                  name="lastname"
                  class="grow"
                  v-model="data.lastname"
                  v-bind="lastnameAttrs"
                  type="text"
                  placeholder="LastName"
                />
              </label>
              <span class="errors">{{ errors.email }}</span>
              <label class="input input-bordered flex items-center gap-2 mt-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="h-4 w-4 opacity-70"
                >
                  <path
                    d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z"
                  />
                  <path
                    d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z"
                  />
                </svg>
                <Field
                  name="email"
                  class="grow"
                  v-model="data.email"
                  v-bind="emailAttrs"
                  type="text"
                  placeholder="Email"
                />
              </label>
              <span class="errors">{{ errors.username }}</span>
              <label class="input input-bordered flex items-center gap-2 mt-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="h-4 w-4 opacity-70"
                >
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z"
                  />
                </svg>
                <Field
                  name="username"
                  class="grow"
                  v-model="data.username"
                  v-bind="usernameAttrs"
                  type="password"
                  placeholder="Username"
                />
              </label>
              <span class="errors">{{ errors.password1 }}</span>
              <label class="input input-bordered flex items-center gap-2 mt-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="h-4 w-4 opacity-70"
                >
                  <path
                    fill-rule="evenodd"
                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <Field
                  name="password1"
                  class="grow"
                  v-model="data.password1"
                  v-bind="password1Attrs"
                  type="password"
                  placeholder="Password"
                />
              </label>
              <span class="errors">{{ errors.password2 }}</span>
              <label class="input input-bordered flex items-center gap-2 mt-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="h-4 w-4 opacity-70"
                >
                  <path
                    fill-rule="evenodd"
                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <Field
                  name="password2"
                  class="grow"
                  v-model="data.password2"
                  v-bind="password2Attrs"
                  type="password"
                  placeholder="Password"
                />
              </label>
              <button class="btn btn-primary w-full">Sign-Up</button>
              <small
                class="flex justify-center"
                id="link"
                v-on:click="$router.push('/')"
                >Back to SignIn</small
              >
            </Form>
          </div>
        </div>
      </div>
    </div>
  </q-page>
</template>

<script setup lang="ts">
import { reactive, ref } from 'vue';
import { Form, Field, useForm } from 'vee-validate';
import * as yup from 'yup';
import { Users } from '../models/Users';

defineOptions({
  name: 'SignupPage',
});

const schema = Object({
  firstname: yup.string().required(),
  lastname: yup.string().required(),
  email: yup.string().required().email('asdasd'),
  username: yup.string().required(),
});

const { values, errors, defineField, meta } = useForm<Users>();

ref(errors);
ref(meta);
ref(values);

const [firstname, firstnameAttrs] = defineField('firstname');
const [lastname, lastnameAttrs] = defineField('lastname');
const [email, emailAttrs] = defineField('email');
const [username, usernameAttrs] = defineField('username');
const [password1, password1Attrs] = defineField('password1');
const [password2, password2Attrs] = defineField('password2');

const data = reactive({
  firstname: firstname,
  lastname: lastname,
  email: email,
  username: username,
  password1: password1,
  password2: password2,
});

function onSubmit() {
  console.log(meta.value.valid);
}
</script>
