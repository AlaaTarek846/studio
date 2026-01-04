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
                           <Editor ref="descRefAr" v-model="v$.description_ar.$model" />
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
                            <Editor ref="descRefEn" v-model="v$.description_en.$model" />
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

                        <!-- Thumbnail Image -->
                        <div class="col-md-12 mt-3">
                          <label class="form-label">{{ $t('global.thumbnail') }} ({{ $t('global.thumbnailDescription') }})</label>
                          <div class="row img-div-position">
                            <div class="col-12 text-end">
                              <button
                                  type="button" class="btn btn-danger btn-sm"
                                  @click="thumbnailUpload = ''; submitData.data.thumbnail = ''"
                                  v-if="thumbnailUpload || submitData.data.thumbnail"
                              >
                                {{ $t('global.deleteImage') }}
                              </button>
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-wrap flex-fill h-100">
                              <div class="btn btn-outline-light waves-effect" style="width: 100%; height:90%">
                                    <span v-if="!thumbnailUpload && !submitData.data.thumbnail" style="margin-top:35%;">
                                        <br><i class="bi bi-cloud-upload fs-40" style="font-size: 85px;"></i>
                                        <i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i>
                                    </span>
                                <input name="thumbnailUpload" type="file" @change="previewThumbnail"
                                       id="thumbnailUpload" accept="image/*">
                                <div id="container-thumbnail" class="row justify-content-center h-100"></div>
                                <div v-if="thumbnailUpload && !submitData.data.thumbnail" class="row justify-content-center h-100">
                                  <figure class="col-3" v-if="!thumbnailUpload.mime_type || !thumbnailUpload.mime_type.includes('application/pdf')">
                                    <img :src="thumbnailUpload.url || thumbnailUpload" class="img-fluid rounded h-100 w-100 m-1" />
                                  </figure>
                                  <figure class="col-3" v-else>
                                    <img src="/assets/images/pdf.png" class="img-fluid rounded h-100 w-100 m-1" />
                                  </figure>
                                </div>
                                <div class="col-md-12 my-1" v-if="v$.thumbnail.$error">
                                  <span class="text-danger" v-if="v$.thumbnail.required.$invalid">{{ $t('validation.fieldRequired') }}<br /></span>
                                </div>
                                <template v-if="errors['thumbnail']">
                                  <error-message v-for="(errorMessage, index) in errors['thumbnail']" :key="index">
                                    {{ errorMessage }}
                                  </error-message>
                                </template>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Slider Images -->
                        <div class="col-md-12 mt-3">
                          <label class="form-label">{{ $t('global.sliderImages') }} ({{ $t('global.sliderImagesDescription') }})</label>
                          <div class="row img-div-position">
                            <!-- Display existing images in edit mode -->
                            <div v-if="type == 'edit' && existingSliderImages.length > 0" class="col-md-12 mb-3">
                              <div class="row">
                                <div class="col-md-3 mb-2" v-for="(img, index) in existingSliderImages" :key="img.id">
                                  <div class="position-relative">
                                    <img :src="img.url" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;" />
                                    <button 
                                      type="button" 
                                      class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1" 
                                      @click="deleteExistingSliderImage(img.id, index)"
                                      :disabled="deletingImageId === img.id"
                                    >
                                      <i v-if="deletingImageId !== img.id" class="ri-close-line"></i>
                                      <i v-else class="ri-loader-2-fill fs-16"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 text-end">
                              <button
                                  type="button" class="btn btn-danger btn-sm"
                                  @click="sliderUploads = []; submitData.data.slider = []"
                                  v-if="sliderUploads.length > 0"
                              >
                                {{ $t('global.deleteAllImages') }}
                              </button>
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-wrap flex-fill h-100">
                              <div class="btn btn-outline-light waves-effect" style="width: 100%; height:90%">
                                    <span v-if="sliderUploads.length === 0" style="margin-top:35%;">
                                        <br><i class="bi bi-cloud-upload fs-40" style="font-size: 85px;"></i>
                                        <i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i>
                                    </span>
                                <input name="sliderUpload" type="file" @change="previewSlider"
                                       id="sliderUpload" accept="image/*" multiple>
                                <div id="container-slider" class="row justify-content-center h-100"></div>
                                <div v-if="sliderUploads.length > 0" class="row justify-content-center h-100 mt-3">
                                  <div class="col-md-3 mb-2" v-for="(img, index) in sliderUploads" :key="'new-' + index">
                                    <div class="position-relative">
                                      <img :src="img.url || img" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;" />
                                      <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1" @click="removeSliderImage(index)">
                                        <i class="ri-close-line"></i>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <template v-if="errors['slider']">
                                  <error-message v-for="(errorMessage, index) in errors['slider']" :key="index">
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
  import {computed, onMounted, reactive, ref, nextTick} from "vue";
  import {useI18n} from "vue-i18n";
  import {maxLength, minLength, required, requiredIf} from "@vuelidate/validators";
  import useVuelidate from "@vuelidate/core";
  import adminApi from "../../../api/adminAxios";
  import Editor from 'primevue/editor';

  const props = defineProps({
      type: {default: 'create'},
      dataRow: {default: ''},
      dataProjectCategories: {default: () => []},
  });

  const emit = defineEmits(['created']);

  setTimeout(async () => {
    let myModalEl = document.getElementById('area-model')
    if (myModalEl) {
      myModalEl.addEventListener('show.bs.modal', function (event) {
        resetModal();
      })
      myModalEl.addEventListener('hidden.bs.modal', function (event) {
        resetModalHidden();
      })
    }
  }, 150);
  
  const errors = ref([]);
  let loading = ref(false);
  let is_disabled = ref(false);
  const { t } = useI18n({});
  const id = ref(null);
  const thumbnailUpload = ref('');
  const sliderUploads = ref([]);
  const existingSliderImages = ref([]);
  const deletingImageId = ref(null);

  function defaultData(){
    submitData.data.status = true;
    submitData.data.thumbnail = '';
    submitData.data.slider = [];
    submitData.data.title_en = '';
    submitData.data.title_ar = '';
    submitData.data.description_en = '';
    submitData.data.description_ar = '';
    submitData.data.project_category_id = '';
    is_disabled.value = false;
    loading.value = false;
    errors.value = [];
    thumbnailUpload.value = '';
    sliderUploads.value = [];
    existingSliderImages.value = [];
    deletingImageId.value = null;
    let i = document.querySelector('#container-thumbnail');
    if(i) { i.innerHTML = ''; }
    let s = document.querySelector('#container-slider');
    if(s) { s.innerHTML = ''; }
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
              submitData.data.title_en = l.title_en || '';
              submitData.data.title_ar = l.title_ar || '';
              submitData.data.description_en = l.description_en || '';
              submitData.data.description_ar = l.description_ar || '';
              submitData.data.project_category_id = l.project_category_id || '';
              submitData.data.status = l.status == 1;
              thumbnailUpload.value = l.thumbnail || '';
              existingSliderImages.value = Array.isArray(l.slider_images) ? l.slider_images : [];
              sliderUploads.value = [];
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
  
  const submitData = reactive({
    data:{
      status: true,
      thumbnail: '',
      slider: [],
      title_en: '',
      title_ar: '',
      description_en: '',
      description_ar: '',
      project_category_id: '',
    }
  });

  const rules = computed(() => {
    return {
      title_en: {required,minLength: minLength(5),maxLength: maxLength(191)},
      title_ar: {required,minLength: minLength(5),maxLength: maxLength(191)},
      description_en: {required,minLength: minLength(5)},
      description_ar: {required,minLength: minLength(5)},
      project_category_id: {required},
      thumbnail: {required: requiredIf( (value) => {
          return props.type == 'create' || !thumbnailUpload.value;
        })
      },
    }
  });

  const v$ = useVuelidate(rules,submitData.data);

  const AddSubmit = () => {
      v$.value.$validate();
      errors.value = {};

      let formData = new FormData();
      formData.append('status', submitData.data.status ? 1 : 0);
      formData.append('title_en', submitData.data.title_en);
      formData.append('title_ar', submitData.data.title_ar);
      formData.append('description_en', submitData.data.description_en);
      formData.append('description_ar', submitData.data.description_ar);
      formData.append('project_category_id', submitData.data.project_category_id);

      if(submitData.data.thumbnail) {
        formData.append('thumbnail', submitData.data.thumbnail);
      }

      if(submitData.data.slider && submitData.data.slider.length > 0) {
        submitData.data.slider.forEach((file, index) => {
          formData.append('slider[]', file);
        });
      }

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

  const previewThumbnail = (e) => {
    let containerImages = document.querySelector("#container-thumbnail");
    if(containerImages) containerImages.innerHTML = "";

    if(e && e.target.files && e.target.files[0]) {
      submitData.data.thumbnail = e.target.files[0];
      let reader = new FileReader();
      let figure = document.createElement('figure');
      figure.className = 'col-3';

      reader.onload = () => {
        let img = document.createElement('img');
        img.className = 'img-fluid rounded h-100 w-100 m-1';
        img.setAttribute('src', reader.result);
        figure.appendChild(img);
        if(containerImages) containerImages.appendChild(figure);
        thumbnailUpload.value = { url: reader.result };
      }

      reader.readAsDataURL(submitData.data.thumbnail);
    }
  };

  const previewSlider = (e) => {
    let containerImages = document.querySelector("#container-slider");
    if(containerImages) containerImages.innerHTML = "";

    if(e && e.target.files && e.target.files.length > 0) {
      if(!submitData.data.slider) submitData.data.slider = [];
      
      Array.from(e.target.files).forEach((file) => {
        submitData.data.slider.push(file);
        let reader = new FileReader();
        let figure = document.createElement('figure');
        figure.className = 'col-md-3 mb-2';

        reader.onload = () => {
          let img = document.createElement('img');
          img.className = 'img-fluid rounded';
          img.style.width = '100%';
          img.style.height = '150px';
          img.style.objectFit = 'cover';
          img.setAttribute('src', reader.result);
          figure.appendChild(img);
          if(containerImages) containerImages.appendChild(figure);
          sliderUploads.value.push({ url: reader.result, file: file });
        }

        reader.readAsDataURL(file);
      });
    }
  };

  const removeSliderImage = (index) => {
    sliderUploads.value.splice(index, 1);
    if(submitData.data.slider) {
      submitData.data.slider.splice(index, 1);
    }
    let containerImages = document.querySelector("#container-slider");
    if(containerImages) {
      containerImages.innerHTML = "";
      sliderUploads.value.forEach((img) => {
        let figure = document.createElement('figure');
        figure.className = 'col-md-3 mb-2';
        let imgEl = document.createElement('img');
        imgEl.className = 'img-fluid rounded';
        imgEl.style.width = '100%';
        imgEl.style.height = '150px';
        imgEl.style.objectFit = 'cover';
        imgEl.setAttribute('src', img.url);
        figure.appendChild(imgEl);
        containerImages.appendChild(figure);
      });
    }
  };

  const deleteExistingSliderImage = (imageId, index) => {
    if (!id.value) return;
    
    deletingImageId.value = imageId;
    adminApi.delete(`projects/slider/${id.value}/${imageId}`)
      .then((res) => {
        existingSliderImages.value.splice(index, 1);
        Swal.fire({
          icon: 'success',
          title: `${t('global.DeletedSuccessfully')}`,
          showConfirmButton: false,
          timer: 1500
        });
      })
      .catch((err) => {
        Swal.fire({
          icon: 'error',
          title: `${t('global.Error')}`,
          text: err.response?.data?.message || 'Failed to delete image',
          showConfirmButton: false,
          timer: 1500
        });
      })
      .finally(() => {
        deletingImageId.value = null;
      });
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
