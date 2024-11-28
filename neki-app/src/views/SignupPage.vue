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
                <input
                  v-model="data.firstname"
                  type="text"
                  class="grow"
                  placeholder="FirstName"
                />
              </label>
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
                <input
                  v-model="data.lastname"
                  type="text"
                  class="grow"
                  placeholder="LastName"
                />
              </label>
              <span>{{ errors.email }}</span>
              <label class="input input-bordered flex items-center gap-2">
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
                  class="grow"
                  name="email"
                  v-model="data.email"
                  type="text"
                />
              </label>
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
                <input type="text" class="grow" placeholder="Username" />
              </label>
              <label class="input input-bordered flex items-center gap-2">
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
                <input
                  v-model="data.password1"
                  type="password"
                  class="grow"
                  placeholder="Password"
                />
              </label>
              <label class="input input-bordered flex items-center gap-2">
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
                <input
                  v-model="data.password2"
                  type="password"
                  class="grow"
                  placeholder="Re-Enter Password"
                />
              </label>
              <button class="btn btn-primary w-full" v-on:click="onSubmit">
                Sign-Up
              </button>
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
import { reactive } from 'vue';
import { Form, Field, useForm } from 'vee-validate';
import * as yup from 'yup';

defineOptions({
  name: 'SignupPage',
});

const schema = Object({
  email: yup.string().required().email(),
});

const { values, errors, defineField, meta } = useForm({
  validationSchema: yup.object({
    email: yup.string().email().required(),
  }),
});

const [email] = defineField('email');

const data = reactive({
  firstname: '',
  lastname: '',
  email: email,
  username: '',
  password1: '',
  password2: '',
  errors: errors,
  values: values,
  meta: meta,
});

function onSubmit() {
  console.log(meta.value.valid);
}
</script>
