<template>
    <div class="modal fade" id="area-model" tabindex="-1"
         aria-labelledby="exampleModalLgLabel" aria-hidden="true" >
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLgLabel">
                        {{type == 'create' ? $t('global.add') : $t('global.update')}}
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                      <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('label.sort') }}</label>

                          <input
                            type="number"
                            class="form-control form-control-lg"
                            v-model="v$.sort.$model"
                            :class="{
                              'is-invalid': v$.sort.$error || errors['sort'],
                              'is-valid': !v$.sort.$invalid && !errors['sort']
                            }"
                          />

                          <div class="invalid-feedback">
                            <span v-if="v$.sort.required.$invalid">
                              {{ $t('validation.fieldRequired') }}<br />
                            </span>

                            <span v-if="v$.sort.minValue?.$invalid">
                              {{ $t('validation.SortMustBeAtLeast') }}
                              {{ v$.sort.minValue.$params.min }}
                              {{ $t('validation.Value') }}<br />
                            </span>

                            <template v-if="errors['sort']">
                              <error-message
                                v-for="(errorMessage, index) in errors['sort']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                        <div class="col-md-6 mt-2">
                            <div class="custom-toggle-switch d-flex align-items-center mt-4">
                                <input id="toggleswitchPrimary" v-model="submitData.data.status" type="checkbox">
                                <label for="toggleswitchPrimary" class="label-primary"></label><span class="ms-3">{{ $t('label.status') }}</span>
                            </div>
                            <template v-if="errors['status']">
                                <error-message v-for="(errorMessage, index) in errors['status']" :key="index">
                                    {{ errorMessage }}
                                </error-message>
                            </template>
                        </div>
                        <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.cost') }}</label>

                          <input
                            type="number"
                            class="form-control form-control-lg"
                            v-model="v$.cost.$model"
                            :class="{
                              'is-invalid': v$.cost.$error || errors['cost'],
                              'is-valid': !v$.cost.$invalid && !errors['cost']
                            }"
                          />

                          <div class="invalid-feedback">
                            <span v-if="v$.cost.required.$invalid">
                              {{ $t('validation.fieldRequired') }}<br />
                            </span>

                            <span v-if="v$.cost.minValue?.$invalid">
                              {{ $t('validation.CostMustBeAtLeast') }}
                              {{ v$.cost.minValue.$params.min }}
                              {{ $t('validation.Value') }}<br />
                            </span>

                            <template v-if="errors['cost']">
                              <error-message
                                v-for="(errorMessage, index) in errors['cost']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                       <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.link') }}</label>

                          <input
                            type="text"
                            class="form-control form-control-lg"
                            v-model="v$.link.$model"
                            :class="{
                              'is-invalid': v$.link.$error || errors['link'],
                              'is-valid': !v$.link.$invalid && !errors['link']
                            }"
                          />

                          <div class="invalid-feedback">
                           <span v-if="v$.link.required.$invalid">
                            {{ $t('validation.fieldRequired') }}<br />
                          </span>

                           <span v-if="v$.link.minLength?.$invalid">
                            {{ $t('validation.LinkIsMustHaveAtMost') }}
                            {{ v$.link.minLength.$params.min }}
                            {{ $t('validation.Letters') }}<br />
                          </span>

                            <span v-if="v$.link.maxLength?.$invalid">
                              {{ $t('validation.LinkIsMustHaveAtLeast') }}
                              {{ v$.link.maxLength.$params.max }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <template v-if="errors['link']">
                              <error-message
                                v-for="(errorMessage, index) in errors['link']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                        <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.industry') }}</label>

                          <input
                            type="text"
                            class="form-control form-control-lg"
                            v-model="v$.industry.$model"
                            :class="{
                              'is-invalid': v$.industry.$error || errors['industry'],
                              'is-valid': !v$.industry.$invalid && !errors['industry']
                            }"
                          />

                          <div class="invalid-feedback">
                           <span v-if="v$.industry.required.$invalid">
                            {{ $t('validation.fieldRequired') }}<br />
                          </span>

                           <span v-if="v$.industry.minLength?.$invalid">
                            {{ $t('validation.IndustryIsMustHaveAtMost') }}
                            {{ v$.industry.minLength.$params.min }}
                            {{ $t('validation.Letters') }}<br />
                          </span>

                            <span v-if="v$.industry.maxLength?.$invalid">
                              {{ $t('validation.IndustryIsMustHaveAtLeast') }}
                              {{ v$.industry.maxLength.$params.max }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <template v-if="errors['industry']">
                              <error-message
                                v-for="(errorMessage, index) in errors['industry']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                         <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.client') }}</label>

                          <input
                            type="text"
                            class="form-control form-control-lg"
                            v-model="v$.client.$model"
                            :class="{
                              'is-invalid': v$.client.$error || errors['client'],
                              'is-valid': !v$.client.$invalid && !errors['client']
                            }"
                          />

                          <div class="invalid-feedback">
                           <span v-if="v$.client.required.$invalid">
                            {{ $t('validation.fieldRequired') }}<br />
                          </span>

                           <span v-if="v$.client.minLength?.$invalid">
                            {{ $t('validation.ClientIsMustHaveAtMost') }}
                            {{ v$.client.minLength.$params.min }}
                            {{ $t('validation.Letters') }}<br />
                          </span>

                            <span v-if="v$.client.maxLength?.$invalid">
                              {{ $t('validation.ClientIsMustHaveAtLeast') }}
                              {{ v$.client.maxLength.$params.max }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <template v-if="errors['client']">
                              <error-message
                                v-for="(errorMessage, index) in errors['client']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                         <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.core_technologies') }}</label>

                          <input
                            type="text"
                            class="form-control form-control-lg"
                            v-model="v$.core_technologies.$model"
                            :class="{
                              'is-invalid': v$.core_technologies.$error || errors['core_technologies'],
                              'is-valid': !v$.core_technologies.$invalid && !errors['core_technologies']
                            }"
                          />

                          <div class="invalid-feedback">
                           <span v-if="v$.core_technologies.required.$invalid">
                            {{ $t('validation.fieldRequired') }}<br />
                          </span>

                           <span v-if="v$.core_technologies.minLength?.$invalid">
                            {{ $t('validation.CoreTechnologiesIsMustHaveAtMost') }}
                            {{ v$.core_technologies.minLength.$params.min }}
                            {{ $t('validation.Letters') }}<br />
                          </span>

                            <span v-if="v$.core_technologies.maxLength?.$invalid">
                              {{ $t('validation.CoreTechnologiesIsMustHaveAtLeast') }}
                              {{ v$.core_technologies.maxLength.$params.max }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <template v-if="errors['core_technologies']">
                              <error-message
                                v-for="(errorMessage, index) in errors['core_technologies']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                          <div class="col-md-6">
                          <label class="form-label">{{ $t('global.projectCategory') }}</label>
                          <Select v-model="submitData.data.project_category_id"
                            :options="dataProjectCategories"
                            option-label="title_ar"
                            option-value="id"
                            :placeholder="$t('global.projectCategory')"
                            class="w-full  w-100"></Select>
                          <div class="invalid-feedback" style="display: block">
                            <template v-if="errors['project_category_id']">
                              <error-message
                                v-for="(errorMessage, index) in errors['project_category_id']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                                        

                         <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.country_ar') }}</label>

                          <input
                            type="text"
                            class="form-control form-control-lg"
                            v-model="v$.country_ar.$model"
                            :class="{
                              'is-invalid': v$.country_ar.$error || errors['country_ar'],
                              'is-valid': !v$.country_ar.$invalid && !errors['country_ar']
                            }"
                          />

                          <div class="invalid-feedback">
                           <span v-if="v$.country_ar.required.$invalid">
                            {{ $t('validation.fieldRequired') }}<br />
                          </span>

                           <span v-if="v$.country_ar.minLength?.$invalid">
                            {{ $t('validation.CountryArIsMustHaveAtMost') }}
                            {{ v$.country_ar.minLength.$params.min }}
                            {{ $t('validation.Letters') }}<br />
                          </span>

                            <span v-if="v$.country_ar.maxLength?.$invalid">
                              {{ $t('validation.CountryArIsMustHaveAtLeast') }}
                              {{ v$.country_ar.maxLength.$params.max }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <template v-if="errors['country_ar']">
                              <error-message
                                v-for="(errorMessage, index) in errors['country_ar']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                        <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.country_en') }}</label>

                          <input
                            type="text"
                            class="form-control form-control-lg"
                            v-model="v$.country_en.$model"
                            :class="{
                              'is-invalid': v$.country_en.$error || errors['country_en'],
                              'is-valid': !v$.country_en.$invalid && !errors['country_en']
                            }"
                          />

                          <div class="invalid-feedback">
                            <span v-if="v$.country_en.required.$invalid">
                              {{ $t('validation.fieldRequired') }}<br />
                            </span>

                            <span v-if="v$.country_en.minLength?.$invalid">
                              {{ $t('validation.CountryEnIsMustHaveAtMost') }}
                              {{ v$.country_en.minLength.$params.min }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <span v-if="v$.country_en.maxLength?.$invalid">
                              {{ $t('validation.CountryEnIsMustHaveAtLeast') }}
                              {{ v$.country_en.maxLength.$params.max }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <template v-if="errors['country_en']">
                              <error-message
                                v-for="(errorMessage, index) in errors['country_en']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                       
                         <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.title_ar') }}</label>

                          <input
                            type="text"
                            class="form-control form-control-lg"
                            v-model="v$.title_ar.$model"
                            :class="{
                              'is-invalid': v$.title_ar.$error || errors['title_ar'],
                              'is-valid': !v$.title_ar.$invalid && !errors['title_ar']
                            }"
                          />

                          <div class="invalid-feedback">
                           <span v-if="v$.title_ar.required.$invalid">
                            {{ $t('validation.fieldRequired') }}<br />
                          </span>

                           <span v-if="v$.title_ar.minLength?.$invalid">
                            {{ $t('validation.TitleArIsMustHaveAtMost') }}
                            {{ v$.title_ar.minLength.$params.min }}
                            {{ $t('validation.Letters') }}<br />
                          </span>

                            <span v-if="v$.title_ar.maxLength?.$invalid">
                              {{ $t('validation.TitleArIsMustHaveAtLeast') }}
                              {{ v$.title_ar.maxLength.$params.max }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <template v-if="errors['title_ar']">
                              <error-message
                                v-for="(errorMessage, index) in errors['title_ar']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                        <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.title_en') }}</label>

                          <input
                            type="text"
                            class="form-control form-control-lg"
                            v-model="v$.title_en.$model"
                            :class="{
                              'is-invalid': v$.title_en.$error || errors['title_en'],
                              'is-valid': !v$.title_en.$invalid && !errors['title_en']
                            }"
                          />

                          <div class="invalid-feedback">
                            <span v-if="v$.title_en.required.$invalid">
                              {{ $t('validation.fieldRequired') }}<br />
                            </span>

                            <span v-if="v$.title_en.minLength?.$invalid">
                              {{ $t('validation.TitleEnIsMustHaveAtMost') }}
                              {{ v$.title_en.minLength.$params.min }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <span v-if="v$.title_en.maxLength?.$invalid">
                              {{ $t('validation.TitleEnIsMustHaveAtLeast') }}
                              {{ v$.title_en.maxLength.$params.max }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                            <template v-if="errors['title_en']">
                              <error-message
                                v-for="(errorMessage, index) in errors['title_en']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>



                       <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.description_ar') }}</label>

                          

                           <Editor ref="descRef" v-model="v$.description_ar.$model" />

                          <div class="invalid-feedback">
                           <span v-if="v$.description_ar.required.$invalid">
                            {{ $t('validation.fieldRequired') }}<br />
                          </span>

                           <span v-if="v$.description_ar.minLength?.$invalid">
                            {{ $t('validation.DescriptionArIsMustHaveAtMost') }}
                            {{ v$.description_ar.minLength.$params.min }}
                            {{ $t('validation.Letters') }}<br />
                          </span>

                          
                            <template v-if="errors['description_ar']">
                              <error-message
                                v-for="(errorMessage, index) in errors['description_ar']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                        <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.description_en') }}</label>


                            <Editor ref="descRef" v-model="v$.description_en.$model" />

                          <div class="invalid-feedback">
                            <span v-if="v$.description_en.required.$invalid">
                              {{ $t('validation.fieldRequired') }}<br />
                            </span>

                            <span v-if="v$.description_en.minLength?.$invalid">
                              {{ $t('validation.DescriptionEnIsMustHaveAtMost') }}
                              {{ v$.description_en.minLength.$params.min }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                         

                            <template v-if="errors['description_en']">
                              <error-message
                                v-for="(errorMessage, index) in errors['description_en']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>


                      
                       <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.overview_ar') }}</label>

                           <Editor ref="descRef" v-model="v$.overview_ar.$model" />

                          <div class="invalid-feedback">
                           <span v-if="v$.overview_ar.required.$invalid">
                            {{ $t('validation.fieldRequired') }}<br />
                          </span>

                           <span v-if="v$.overview_ar.minLength?.$invalid">
                            {{ $t('validation.OverviewArIsMustHaveAtMost') }}
                            {{ v$.overview_ar.minLength.$params.min }}
                            {{ $t('validation.Letters') }}<br />
                          </span>


                            <template v-if="errors['overview_ar']">
                              <error-message
                                v-for="(errorMessage, index) in errors['overview_ar']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>
                        <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.overview_en') }}</label>


                            <Editor ref="descRef" v-model="v$.overview_en.$model" />

                          <div class="invalid-feedback">
                            <span v-if="v$.overview_en.required.$invalid">
                              {{ $t('validation.fieldRequired') }}<br />
                            </span>

                            <span v-if="v$.overview_en.minLength?.$invalid">
                              {{ $t('validation.OverviewEnIsMustHaveAtMost') }}
                              {{ v$.overview_en.minLength.$params.min }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                         

                            <template v-if="errors['overview_en']">
                              <error-message
                                v-for="(errorMessage, index) in errors['overview_en']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                      </div>

                        <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.challenge_ar') }}</label>

                           <Editor ref="descRef" v-model="v$.challenge_ar.$model" />
                          
                          <div class="invalid-feedback">

                            <span v-if="v$.challenge_ar.minLength?.$invalid">
                              {{ $t('validation.ChallengeArIsMustHaveAtMost') }}
                              {{ v$.challenge_ar.minLength.$params.min }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                              <template v-if="errors['challenge_ar']">
                                <error-message
                                  v-for="(errorMessage, index) in errors['challenge_ar']"
                                  :key="index"
                                >
                                  {{ errorMessage }}
                                </error-message>
                              </template>
                          </div>
                      </div>
                        <div class="col-md-6 mb-2">
                          <label class="form-label">{{ $t('global.challenge_en') }}</label>


                            <Editor ref="descRef" v-model="v$.challenge_en.$model" />

                          <div class="invalid-feedback">

                            <span v-if="v$.challenge_en.minLength?.$invalid">
                              {{ $t('validation.ChallengeEnIsMustHaveAtMost') }}
                              {{ v$.challenge_en.minLength.$params.min }}
                              {{ $t('validation.Letters') }}<br />
                            </span>

                         

                            <template v-if="errors['challenge_en']">
                              <error-message
                                v-for="(errorMessage, index) in errors['challenge_en']"
                                :key="index"
                              >
                                {{ errorMessage }}
                              </error-message>
                            </template>
                          </div>
                            
                      </div>
                        

                        <div class="col-md-12 mt-3">
                          <label class="form-label">صورة الخلفية (800 * 790)</label>
                          <div class="row img-div-position">
                            <div class="col-12 text-end">
                              <button
                                  type="button" class="btn btn-danger btn-sm"
                                  @click="imageUpload = ''"
                                  v-if="imageUpload"
                              >
                                {{ $t('global.deleteImage') }}
                              </button>
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-wrap flex-fill h-100">
                              <div class="btn btn-outline-light waves-effect" style="width: 100%; height:90%">

                                    <span v-if="!imageUpload && !submitData.data.image" style="margin-top:35%;">
                                        <br><i class="bi bi-cloud-upload fs-40" style="font-size: 85px;"></i>
                                        <i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i>
                                    </span>

                                <input name="mediaPackageUpload" type="file" @change="preview"
                                       id="photoPersonal1" accept="image/*">

                                <div id="container-images" class="row justify-content-center h-100"></div>

                                <div v-if="imageUpload && !submitData.data.image" class="row justify-content-center h-100">
                                  <figure class="col-3" v-if="!imageUpload.mime_type.includes('application/pdf')">
                                    <img :src="imageUpload.url" class="img-fluid rounded h-100 w-100 m-1" />
                                  </figure>
                                  <figure class="col-3" v-else>
                                    <img src="/assets/images/pdf.png" class="img-fluid rounded h-100 w-100 m-1" />
                                  </figure>
                                </div>

                                <div class="col-md-12 my-1" v-if="v$.image.$error">
                                  <span class="text-danger" v-if="v$.image.required.$invalid">{{ $t('validation.fieldRequired') }}<br /></span>
                                </div>
                                <template v-if="errors['image']">
                                  <error-message v-for="(errorMessage, index) in errors['image']" :key="index">
                                    {{ errorMessage }}
                                  </error-message>
                                </template>

                              </div>

                            </div>
                          </div>
                        </div>
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button v-if="type != 'edit'" :disabled="!is_disabled"
                            @click.prevent="resetModal" type="button" class="btn btn-secondary">{{$t('global.AddNewRecord')}}</button>
                    <template v-if="!is_disabled">
                        <button type="submit" v-if="!loading" @click.prevent="AddSubmit" class="btn btn-primary">{{ $t('global.Submit') }}</button>

                        <button class="btn btn-primary btn-loader" v-else>
                            <span class="me-2">{{$t('global.Loading')}}</span>
                            <span class="loading"><i class="ri-loader-2-fill fs-16"></i></span>
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
  import {computed, onMounted, reactive, ref, toRefs, watch, nextTick, defineEmits} from "vue";
  import {useI18n} from "vue-i18n";
  import {maxLength, minLength, required, numeric, between, integer, requiredIf} from "@vuelidate/validators";
  import useVuelidate from "@vuelidate/core";
  import adminApi from "../../../api/adminAxios";
  import {useStore} from "vuex";
  import Editor from 'primevue/editor';
  const components = { Editor };

  const props = defineProps({
      type: {default: 'create'},
      dataRow: {default: ''},
      dataProjectCategories: {default: () => []},
  });

  const emit = defineEmits(['created','getStatus']);

  setTimeout(async () => {
    let myModalEl = document.getElementById('area-model')
    myModalEl.addEventListener('show.bs.modal', function (event) {
      resetModal();
    })
    myModalEl.addEventListener('hidden.bs.modal', function (event) {
      resetModalHidden();
    })
  }, 150);
  const errors = ref([]);
  const areas = ref([]);
  const cities = ref([]);
  const langValidation = ref({});
  let loading = ref(false);
  let is_disabled = ref(false);
  const { t } = useI18n({});
  const store = useStore();
  const id = ref(null);
  const imageUpload = ref('');

  onMounted(()=>{
  });

  function defaultData(){

    submitData.data.sort = '';
    submitData.data.image = '';
    submitData.data.title_en = '';
    submitData.data.title_ar = '';
    submitData.data.description_en = '';
    submitData.data.description_ar = '';
    submitData.data.overview_en = '';
    submitData.data.overview_ar = '';
    submitData.data.challenge_en = '';
    submitData.data.challenge_ar = '';
    submitData.data.country_ar = '';
    submitData.data.country_en = '';
    submitData.data.link = '';
    submitData.data.cost = '';
    submitData.data.industry = '';
    submitData.data.client = '';
    submitData.data.core_technologies = '';
    submitData.data.project_category_id = '';
    submitData.data.status = true;
    submitData.data.image = '';
    is_disabled.value = false;
    loading.value = false;
    errors.value = [];
    imageUpload.value = '';
    let i = document.querySelector('#container-images');
    if(i) { i.innerHTML = ''; }
  }
  function resetModal() {
    defaultData();
    setTimeout(async () => {
      if (props.type != 'edit') {
      } else {
        id.value = props.dataRow.id;

        adminApi.get(`projects/${id.value}`)
            .then((res) => {
              loading.value = true;
              let l = res.data.data;
              submitData.data.sort = l.sort;
              imageUpload.value = l.media;
              submitData.data.title_en = l.title_en;
              submitData.data.title_ar = l.title_ar;
              submitData.data.description_en = l.description_en;
              submitData.data.description_ar = l.description_ar;
              submitData.data.overview_en = l.overview_en;
              submitData.data.overview_ar = l.overview_ar;
              submitData.data.challenge_en = l.challenge_en;
              submitData.data.challenge_ar = l.challenge_ar;
              submitData.data.country_en = l.country_en;
              submitData.data.country_ar = l.country_ar;
              submitData.data.link = l.link;
              submitData.data.cost = l.cost;
              submitData.data.industry = l.industry;
              submitData.data.client = l.client;
              submitData.data.core_technologies = l.core_technologies;
              submitData.data.project_category_id = l.project_category_id;
              submitData.data.status = l.status == 1;
            })
            .catch((err) => {
              console.log(err);
            })
            .finally(() => {
              loading.value = false;
            })
      }
    }, 50);
  }
  function resetModalHidden() {
    defaultData();
    nextTick(() => { v$.value.$reset() });
  }
  //start design
  const submitData =  reactive({
    data:{
      status: true,
      image: '',
      title_en: '',
      title_ar: '',
      description_en: '',
      description_ar: '',
      overview_en: '',
      overview_ar: '',
      challenge_en: '',
      challenge_ar: '',
      country_en: '',
      country_ar: '',
      link: '',
      cost: '',
      industry: '',
      client: '',
      core_technologies: '',
      project_category_id: '',
      sort: '',
    }
  });

  const rules = computed(() => {
    return {
      ...langValidation.value,
      image: {required: requiredIf( (value) => {
          return props.type == 'create' || !imageUpload.value;
        })
      },
      sort: {required,integer,between: (value) => {
          if(value === undefined || value === null || value === '') return true;
          return value >= 1 && value <= 15;
      }
      },
      title_en: {required,minLength: minLength(5),maxLength: maxLength(191)},
      title_ar: {required,minLength: minLength(5),maxLength: maxLength(191)},
      country_en: {required,minLength: minLength(2),maxLength: maxLength(191)},
      country_ar: {required,minLength: minLength(2),maxLength: maxLength(191)},
      description_en: {required,minLength: minLength(5)},
      description_ar: {required,minLength: minLength(5)},
      overview_en: {required,minLength: minLength(5)},
      overview_ar: {required,minLength: minLength(5)},
      challenge_en: {minLength: minLength(5)},
      challenge_ar: {minLength: minLength(5)},
      link: {required,minLength: minLength(5),maxLength: maxLength(191),logical: (value) => {
          if(value === undefined || value === null || value === '') return true;
          const pattern = /^(https?:\/\/)?([\w-]+(\.[\w-]+)+)(\/[\w-./?%&=]*)?$/i;
          return pattern.test(value);
      }},
      cost: {required,integer,between: (value) => {
          if(value === undefined || value === null || value === '') return true;
          return value >= 1 && value <= 9999999999;
      }},
      industry: {required,minLength: minLength(2),maxLength: maxLength(191)},
      client: {required,minLength: minLength(2),maxLength: maxLength(191)},
      core_technologies: {required,minLength: minLength(2),maxLength: maxLength(191)},
      project_category_id: {required},
    }
  });

  const v$ = useVuelidate(rules,submitData.data);

  const AddSubmit = () =>  {

      v$.value.$validate();
      errors.value = {};

      let formData = new FormData();
      formData.append('status', submitData.data.status ? 1 : 0);
      formData.append('title_en', submitData.data.title_en);
      formData.append('title_ar', submitData.data.title_ar);
      formData.append('description_en', submitData.data.description_en);
      formData.append('description_ar', submitData.data.description_ar);
      formData.append('overview_en', submitData.data.overview_en);
      formData.append('overview_ar', submitData.data.overview_ar);
      formData.append('challenge_en', submitData.data.challenge_en);
      formData.append('challenge_ar', submitData.data.challenge_ar);
      formData.append('country_en', submitData.data.country_en);
      formData.append('country_ar', submitData.data.country_ar);
      formData.append('link', submitData.data.link);
      formData.append('cost', submitData.data.cost);
      formData.append('industry', submitData.data.industry);
      formData.append('client', submitData.data.client);
      formData.append('core_technologies', submitData.data.core_technologies);
      formData.append('sort', submitData.data.sort);
      formData.append('project_category_id', submitData.data.project_category_id);

    if(submitData.data.image) {
      formData.append('image', submitData.data.image);
    }

    console.log(props.type);

      if (props.type !== 'edit') {
        if (!v$.value.$error) {
          is_disabled.value = false;
          loading.value = true;
          adminApi.post(`projects`, formData)
              .then((res) => {
                Swal.fire({
                  icon: 'success',
                  title: `${t('global.AddedSuccessfully')}`,
                  showConfirmButton: false,
                  timer: 1500
                });
                emit("created");
                is_disabled.value = true;
              })
              .catch((err) => {
                errors.value = err.response?.data?.errors;
              })
              .finally(() => {
                loading.value = false;
              });
        }
      }else if(!v$.value.$error) {
        is_disabled.value = false;
        loading.value = true;
        formData.append('_method','PUT');
        adminApi.post(`projects/${id.value}`,formData)
            .then((res) => {
              Swal.fire({
                icon: 'success',
                title: `${t('global.EditSuccessfully')}`,
                showConfirmButton: false,
                timer: 1500
              });
              emit("created");
            })
            .catch((err) => {
              errors.value = err.response?.data?.errors;
            })
            .finally(() => {
              loading.value = false;
            });
      }

}

  const preview = (e) => {
    let containerImages = document.querySelector("#container-images");
    containerImages.innerHTML = "";

    if(e) {
      submitData.data.image = {};
      submitData.data.image = e.target.files[0];
      if(submitData.data.image.type.includes('application/')) {
        let figure = document.createElement('figure');
        figure.className = 'col-3';
        let img = document.createElement('img');
        img.className = 'img-fluid rounded h-100 w-100 m-1';
        img.setAttribute('src', '/assets/images/pdf.png');
        figure.appendChild(img);
        containerImages.appendChild(figure);
      }else {
        let reader = new FileReader();
        let figure = document.createElement('figure');
        figure.className = 'col-3';

        reader.onload = () => {
          let img = document.createElement('img');
          img.className = 'img-fluid rounded h-100 w-100 m-1';
          img.setAttribute('src', reader.result);
          figure.appendChild(img);
        }

        containerImages.appendChild(figure);
        reader.readAsDataURL(submitData.data.image);
      }

    }

  };
</script>

<style scoped>
.ml-3 {
  margin-left: 1.5rem;
}

.waves-effect {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  width: 200px;
  height: 50px;
  text-align: center;
  line-height: 34px;
  margin: auto;
}

input[type="file"] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  cursor: pointer;
  filter: alpha(opacity=0);
  opacity: 0;
}

.waves-effect[data-v-d8970579] {
  background-color: #e9e9e9;
}

</style>
