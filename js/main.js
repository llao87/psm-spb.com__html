(function () {
  const burger = document.getElementById("burger");
  const nav = document.getElementById("nav");
  const yearEl = document.getElementById("year");
  const leadForms = document.querySelectorAll("form.js-lead-form");
  const pricelistBtn = document.getElementById("pricelistBtn");
  const tabButtons = document.querySelectorAll(".tabs__btn");
  const projects = document.querySelectorAll(".project");

  if (yearEl) {
    yearEl.textContent = String(new Date().getFullYear());
  }

  function resolveFormToast(anchor) {
    if (!anchor || anchor.nodeType !== 1) return null;
    var direct = anchor.querySelector && anchor.querySelector(".form-toast");
    if (direct) return direct;
    if (anchor.classList && anchor.classList.contains("form-toast")) return anchor;
    var form = anchor.closest && anchor.closest("form");
    if (form) {
      var inForm = form.querySelector(".form-toast");
      if (inForm) return inForm;
    }
    return null;
  }

  function showToast(message, anchor) {
    var t = resolveFormToast(anchor);
    if (!t) return;
    var isError =
      typeof message === "string" &&
      (message.indexOf("Укажите") === 0 || message.indexOf("Подтвердите") === 0);
    t.classList.toggle("form-toast--error", isError);
    t.classList.toggle("form-toast--ok", !isError);
    t.textContent = message;
    t.hidden = false;
    clearTimeout(showToast._t);
    showToast._t = setTimeout(function () {
      t.hidden = true;
    }, 4200);
  }

  function setNavOpen(open) {
    if (!burger || !nav) return;
    burger.setAttribute("aria-expanded", open ? "true" : "false");
    nav.classList.toggle("is-open", open);
    document.body.style.overflow = open ? "hidden" : "";
  }

  if (burger && nav) {
    burger.addEventListener("click", function () {
      const open = burger.getAttribute("aria-expanded") === "true";
      setNavOpen(!open);
    });

    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        setNavOpen(false);
      });
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") setNavOpen(false);
    });
  }

  if (tabButtons.length && projects.length) {
    tabButtons.forEach(function (btn) {
      btn.addEventListener("click", function () {
        const filter = btn.getAttribute("data-filter") || "all";
        tabButtons.forEach(function (b) {
          b.classList.toggle("is-active", b === btn);
          b.setAttribute("aria-selected", b === btn ? "true" : "false");
        });
        projects.forEach(function (card) {
          const cats = (card.getAttribute("data-cat") || "").split(/\s+/);
          const show = filter === "all" || cats.includes(filter);
          card.classList.toggle("is-hidden", !show);
        });
      });
    });
  }

  leadForms.forEach(function (leadForm) {
    leadForm.addEventListener("submit", function (e) {
      e.preventDefault();
      var phone = leadForm.querySelector('input[name="phone"]');
      var v = phone && phone.value.trim();
      if (!v || v.length < 6) {
        showToast("Укажите телефон для обратной связи.", leadForm);
        if (phone) phone.focus();
        return;
      }
      var pdConsent = leadForm.querySelector('input[name="pd_consent"]');
      if (pdConsent && !pdConsent.checked) {
        showToast("Подтвердите согласие на обработку персональных данных (152-ФЗ).", leadForm);
        pdConsent.focus();
        return;
      }
      showToast("Заявка принята. Мы свяжемся с вами в ближайшее время.", leadForm);
      leadForm.reset();
    });
  });

  if (pricelistBtn) {
    pricelistBtn.addEventListener("click", function () {
      var box = pricelistBtn.closest(".pricelist__box");
      showToast("Прайс-лист будет отправлен на указанную почту после связи с менеджером.", box);
    });
  }

  var revealables = document.querySelectorAll(".card--reveal");
  if ("IntersectionObserver" in window && revealables.length) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            io.unobserve(entry.target);
          }
        });
      },
      { rootMargin: "0px 0px -8% 0px", threshold: 0.08 }
    );
    revealables.forEach(function (el) {
      io.observe(el);
    });
  } else {
    revealables.forEach(function (el) {
      el.classList.add("is-visible");
    });
  }

  /* Форма обратного звонка — всплывающая */
  (function initServiceLeadForm() {
    var formSection = document.querySelector(".service-lead");
    if (!formSection) return;

    // Создаём кнопку для открытия формы
    var triggerBtn = document.createElement("button");
    triggerBtn.type = "button";
    triggerBtn.className = "btn btn--primary service-lead__trigger";
    triggerBtn.textContent = "Заказать обратный звонок";
    triggerBtn.setAttribute("aria-haspopup", "dialog");

    // Находим секцию с услугами или другое подходящее место
    var servicesSection = document.querySelector(".activity");
    if (servicesSection) {
      var note = servicesSection.querySelector(".section-note");
      if (note) {
        note.parentNode.insertBefore(triggerBtn, note);
      } else {
        servicesSection.appendChild(triggerBtn);
      }
    } else {
      // Если нет, вставляем после хедера
      var header = document.querySelector("header");
      if (header) {
        header.insertAdjacentElement("afterend", triggerBtn);
      }
    }

    // Показываем форму
    triggerBtn.addEventListener("click", function () {
      formSection.hidden = false;
      // Фокус на первое поле
      var firstInput = formSection.querySelector("input, textarea");
      if (firstInput) {
        firstInput.focus();
      }
    });

    // Скрываем форму при отправке
    var form = formSection.querySelector("form");
    if (form) {
      form.addEventListener("submit", function () {
        formSection.hidden = true;
      });
    }
  })();

  /* Главная: полноширинный слайдер */
  var heroFs = document.getElementById("heroFs");
  var heroTrack = document.getElementById("heroFsTrack");
  var heroSlides = heroFs ? heroFs.querySelectorAll(".hero-fs__slide") : [];
  if (heroFs && heroTrack && heroSlides.length) {
    var track = heroTrack;
    var slides = heroSlides;
    var dots = heroFs.querySelectorAll(".hero-fs__dot");
    var prevBtn = document.getElementById("heroFsPrev");
    var nextBtn = document.getElementById("heroFsNext");
    var n = slides.length;
    var index = 0;
    var autoplayMs = parseInt(heroFs.getAttribute("data-autoplay-ms") || "7500", 10);
    var reduceMotion =
      typeof window.matchMedia === "function" &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    var timer = null;

    heroFs.style.setProperty("--hero-count", String(n));

    function go(i) {
      index = (i + n) % n;
      if (track) {
        var stepPct = 100 / n;
        track.style.transform = "translateX(-" + index * stepPct + "%)";
      }
      slides.forEach(function (slide, j) {
        var on = j === index;
        slide.classList.toggle("is-active", on);
        slide.setAttribute("aria-hidden", on ? "false" : "true");
      });
      dots.forEach(function (dot, j) {
        var on = j === index;
        dot.classList.toggle("is-active", on);
        dot.setAttribute("aria-selected", on ? "true" : "false");
        dot.setAttribute("tabindex", on ? "0" : "-1");
      });
    }

    function next() {
      go(index + 1);
    }

    function prev() {
      go(index - 1);
    }

    function armAutoplay() {
      clearInterval(timer);
      if (reduceMotion || n < 2 || autoplayMs < 2000) return;
      timer = setInterval(next, autoplayMs);
    }

    if (nextBtn) nextBtn.addEventListener("click", function () {
      next();
      armAutoplay();
    });
    if (prevBtn) prevBtn.addEventListener("click", function () {
      prev();
      armAutoplay();
    });

    dots.forEach(function (dot, j) {
      dot.addEventListener("click", function () {
        go(j);
        armAutoplay();
      });
    });

    heroFs.addEventListener("mouseenter", function () {
      clearInterval(timer);
    });
    heroFs.addEventListener("mouseleave", function () {
      armAutoplay();
    });

    document.addEventListener("visibilitychange", function () {
      if (document.hidden) clearInterval(timer);
      else armAutoplay();
    });

    go(0);
    armAutoplay();
  }

  /* Главная: метрики под слайдером — счётчик 0 → значение */
  (function initHomeHeroMetrics() {
    var root = document.getElementById("homeHeroMetrics");
    if (!root) return;
    var nodes = root.querySelectorAll(".js-metric");
    if (!nodes.length) return;
    var reduceMotion =
      typeof window.matchMedia === "function" &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    var ran = false;

    function easeOutCubic(t) {
      return 1 - Math.pow(1 - t, 3);
    }

    function animateOne(el) {
      var raw = el.getAttribute("data-target");
      var target = parseFloat(raw);
      var suffix = el.getAttribute("data-suffix");
      if (suffix === null || typeof suffix === "undefined") suffix = "";
      if (isNaN(target)) return;
      if (reduceMotion) {
        el.textContent = String(Math.round(target)) + suffix;
        return;
      }
      var start = performance.now();
      var dur = 1450;
      function tick(now) {
        var t = Math.min(1, (now - start) / dur);
        var v = Math.round(target * easeOutCubic(t));
        el.textContent = String(v) + (t >= 1 ? suffix : "");
        if (t < 1) requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    }

    function run() {
      if (ran) return;
      ran = true;
      nodes.forEach(animateOne);
    }

    if ("IntersectionObserver" in window) {
      var io = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (en) {
            if (en.isIntersecting) {
              run();
              io.disconnect();
            }
          });
        },
        { threshold: 0.2, rootMargin: "0px 0px -8% 0px" }
      );
      io.observe(root);
    } else {
      run();
    }
  })();

  /* About: testimonials — 2 visible, scroll by 1 */
  (function initTestimonialsCarousel() {
    var root = document.getElementById("testimonialsCarousel");
    if (!root) return;
    var viewport = root.querySelector(".tc-viewport");
    var track = root.querySelector(".tc-track");
    var prevBtn = root.querySelector(".tc-btn--prev");
    var nextBtn = root.querySelector(".tc-btn--next");
    if (!viewport || !track) return;

    var slides = Array.prototype.slice.call(track.children);
    var visible = 2;
    if (slides.length < visible) return;

    var index = 0;
    var maxIndex = Math.max(0, slides.length - visible);

    function parseGapPx() {
      var g = getComputedStyle(track).gap || getComputedStyle(track).columnGap || "1rem";
      var m = String(g).match(/^([\d.]+)px$/);
      if (m) return parseFloat(m[1]);
      if (String(g).indexOf("rem") !== -1) {
        var rem = parseFloat(g);
        if (!isNaN(rem)) return rem * (parseFloat(getComputedStyle(document.documentElement).fontSize) || 16);
      }
      return 16;
    }

    function stepPx() {
      var w = viewport.getBoundingClientRect().width;
      var gap = parseGapPx();
      var slideW = (w - gap) / 2;
      return slideW + gap;
    }

    function syncAria() {
      if (prevBtn) {
        prevBtn.disabled = index <= 0;
        prevBtn.setAttribute("aria-disabled", index <= 0 ? "true" : "false");
      }
      if (nextBtn) {
        nextBtn.disabled = index >= maxIndex;
        nextBtn.setAttribute("aria-disabled", index >= maxIndex ? "true" : "false");
      }
      slides.forEach(function (el, i) {
        var inView = i >= index && i < index + visible;
        el.setAttribute("aria-hidden", inView ? "false" : "true");
      });
    }

    function apply() {
      var step = stepPx();
      track.style.transform = "translate3d(" + (-index * step) + "px,0,0)";
      syncAria();
    }

    var rafResize;
    function onResize() {
      cancelAnimationFrame(rafResize);
      rafResize = requestAnimationFrame(apply);
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", function () {
        if (index > 0) {
          index -= 1;
          apply();
        }
      });
    }
    if (nextBtn) {
      nextBtn.addEventListener("click", function () {
        if (index < maxIndex) {
          index += 1;
          apply();
        }
      });
    }

    window.addEventListener("resize", onResize);
    apply();
  })();

  /* Объекты: попап с галереей, «AJAX» при клике (projects.html) */
  (function initProjectGalleryModal() {
    var modal = document.getElementById("projectGalleryModal");
    if (!modal) return;

    var titleEl = document.getElementById("pgModalTitle");
    var ledeEl = document.getElementById("pgModalLede");
    var spinnerLayer = document.getElementById("pgModalSpinnerLayer");
    var spinnerText = document.getElementById("pgSpinnerText");
    var galleryEl = document.getElementById("pgGallery");
    var viewport = document.getElementById("pgGalleryViewport");
    var track = document.getElementById("pgGalleryTrack");
    var prevBtn = document.getElementById("pgGalleryPrev");
    var nextBtn = document.getElementById("pgGalleryNext");
    var counterEl = document.getElementById("pgModalCounter");
    var closeBtn = document.getElementById("pgModalClose");

    if (!titleEl || !ledeEl || !spinnerLayer || !spinnerText || !galleryEl || !viewport || !track || !prevBtn || !nextBtn || !counterEl) {
      return;
    }

    /**
     * Данные «с сервера»: в продакшене пришли бы из JSON ответа.
     * Сейчас — статический объект, имитирующий тело ответа API.
     */
    var SERVER_GALLERY_PAYLOADS = {
      "retail-interior": {
        lede: [
          "Демонстрационный блок с условным описанием: здесь обычно кратко резюмируют объём работ, сроки ввода и ключевые решения по материалам и освещению.",
          "Второй абзац — рыба для вёрстки: заказчик получил единую линию коммуникации, а фото фиксируют этапы от черновой отделки до финальной сдачи площадки.",
        ],
        images: [
          { url: "https://picsum.photos/seed/psm-retail-1/1600/1000", alt: "Торговое помещение после отделки" },
          { url: "https://picsum.photos/seed/psm-retail-2/1600/1000", alt: "Монтаж потолочных конструкций" },
          { url: "https://picsum.photos/seed/psm-retail-3/1600/1000", alt: "Зона касс и проходов" },
        ],
      },
      "facade-glass": {
        lede: [
          "Условный текст о проекте: фасадная подсистема согласована с архитектурным обликом здания, узлы вынесены в рабочую документацию и сопровождались авторским надзором.",
          "Ещё один абзац-рыба: монтаж вёлся поэтапно с учётом погодных окон; на снимках — контроль геометрии и примерочные листы стеклопакетов на площадке.",
        ],
        images: [
          { url: "https://picsum.photos/seed/psm-facade-1/1600/1000", alt: "Фасадное остекление, общий вид" },
          { url: "https://picsum.photos/seed/psm-facade-2/1600/1000", alt: "Узел крепления профиля" },
          { url: "https://picsum.photos/seed/psm-facade-3/1600/1000", alt: "Фасад с улицы" },
          { url: "https://picsum.photos/seed/psm-facade-4/1600/1000", alt: "Этап монтажа стеклопакетов" },
        ],
      },
      "industrial-rebuild": {
        lede: [
          "Текст-заглушка: реконструкция корпусов включала усиление несущих конструкций и модернизацию инженерных контуров без полной остановки производственного цикла.",
          "Второй абзац для макета: подрядчик вёл журнал скрытых работ; фотографии иллюстрируют типовые узлы и готовые участки после приёмки технадзора заказчика.",
        ],
        images: [
          { url: "https://picsum.photos/seed/psm-ind-1/1600/1000", alt: "Корпус после реконструкции" },
          { url: "https://picsum.photos/seed/psm-ind-2/1600/1000", alt: "Внутренние инженерные коммуникации" },
          { url: "https://picsum.photos/seed/psm-ind-3/1600/1000", alt: "Производственный цех" },
        ],
      },
      "film-studio": {
        lede: [
          "Рыбный вводный абзац: павильон готовился под съёмочный график — акустика, рассеянный свет и трассировка кабельных коробов согласованы с режиссёрской группой.",
          "Краткое описание для вёрстки: на фото зафиксированы этапы чистовой отделки и монтажа оборудования; итоговое пространство соответствует заданным нормативам по шуму.",
        ],
        images: [
          { url: "https://picsum.photos/seed/psm-film-1/1600/1000", alt: "Павильон, подготовка площадки" },
          { url: "https://picsum.photos/seed/psm-film-2/1600/1000", alt: "Акустические и световые решения" },
          { url: "https://picsum.photos/seed/psm-film-3/1600/1000", alt: "Готовое студийное пространство" },
        ],
      },
      monolith: {
        lede: [
          "Условный текст: объём монолитных работ включал ростверк, колонны и плиты перекрытия; бетон и арматура поставлялись по согласованному графику с лабораторным контролем.",
          "Второй абзац-заглушка: на снимках — армирование, опалубка и готовые поверхности; все этапы сопровождались актами и фотофиксацией для исполнительной документации.",
        ],
        images: [
          { url: "https://picsum.photos/seed/psm-mono-1/1600/1000", alt: "Монолитные колонны и ростверк" },
          { url: "https://picsum.photos/seed/psm-mono-2/1600/1000", alt: "Армирование перед заливкой" },
          { url: "https://picsum.photos/seed/psm-mono-3/1600/1000", alt: "Плита перекрытия" },
        ],
      },
      "private-house": {
        lede: [
          "Демо-описание загородного объекта: проект совмещает жилой блок, инженерию «под ключ» и благоустройство участка; сроки этапов согласовывались с заказчиком письменно.",
          "Рыбный абзац: интерьерные решения и фасадные материалы подбирались под единую палитру; галерея показывает ход работ и финальный вид с улицы и со двора.",
        ],
        images: [
          { url: "https://picsum.photos/seed/psm-house-1/1600/1000", alt: "Загородный дом, фасад" },
          { url: "https://picsum.photos/seed/psm-house-2/1600/1000", alt: "Интерьер, отделка" },
          { url: "https://picsum.photos/seed/psm-house-3/1600/1000", alt: "Участок и благоустройство" },
          { url: "https://picsum.photos/seed/psm-house-4/1600/1000", alt: "Терраса и входная группа" },
        ],
      },
    };

    /**
     * Имитация AJAX: задержка сети + объект как у fetch (then → res.json()).
     * Реальный вариант: return fetch("/api/projects/" + projectId + "/gallery").then(r => r.json());
     */
    function simulateAjaxProjectGallery(projectId) {
      return new Promise(function (resolve, reject) {
        var latencyMs = 380 + Math.floor(Math.random() * 420);
        setTimeout(function () {
          var payload = SERVER_GALLERY_PAYLOADS[projectId];
          if (!payload || !payload.images || !payload.images.length) {
            reject(new Error("gallery_not_found"));
            return;
          }
          resolve({
            ok: true,
            status: 200,
            json: function () {
              return Promise.resolve(payload);
            },
          });
        }, latencyMs);
      });
    }

    var index = 0;
    var n = 0;
    var lastFocus = null;
    var galleryOpen = false;
    var loadToken = 0;

    function setSlideWidths() {
      var w = viewport.getBoundingClientRect().width;
      if (w <= 0) return;
      Array.prototype.forEach.call(track.children, function (fig) {
        fig.style.width = w + "px";
      });
    }

    function applyTransform() {
      var w = viewport.getBoundingClientRect().width;
      if (w <= 0) return;
      track.style.transform = "translate3d(" + (-index * w) + "px,0,0)";
    }

    function syncGalleryUi() {
      if (prevBtn) prevBtn.disabled = index <= 0;
      if (nextBtn) nextBtn.disabled = n <= 0 || index >= n - 1;
      if (counterEl) {
        counterEl.hidden = n < 2;
        counterEl.textContent = n ? index + 1 + " / " + n : "";
      }
    }

    function go(i) {
      if (n <= 0) return;
      index = Math.max(0, Math.min(n - 1, i));
      setSlideWidths();
      applyTransform();
      syncGalleryUi();
    }

    function clearGallery() {
      track.innerHTML = "";
      n = 0;
      index = 0;
      track.style.transform = "";
    }

    function setLede(paragraphs) {
      ledeEl.innerHTML = "";
      if (!paragraphs || !paragraphs.length) {
        ledeEl.hidden = true;
        return;
      }
      paragraphs.forEach(function (txt) {
        var p = document.createElement("p");
        p.textContent = txt;
        ledeEl.appendChild(p);
      });
      ledeEl.hidden = false;
    }

    function hideSlideSpinner(spin) {
      if (spin) spin.classList.add("is-done");
    }

    function renderGallery(images, token) {
      if (modal.hidden || token !== loadToken) return;
      clearGallery();
      n = images.length;
      images.forEach(function (item, i) {
        var fig = document.createElement("figure");
        fig.className = "pg-gallery__slide";
        var inner = document.createElement("div");
        inner.className = "pg-gallery__slide-inner";
        var spin = document.createElement("div");
        spin.className = "pg-slide-spinner";
        var ring = document.createElement("span");
        ring.className = "pg-spinner pg-spinner--sm";
        ring.setAttribute("aria-hidden", "true");
        spin.appendChild(ring);
        var img = document.createElement("img");
        img.src = item.url;
        img.alt = item.alt || "";
        img.loading = i === 0 ? "eager" : "lazy";
        img.addEventListener("load", function () {
          hideSlideSpinner(spin);
        });
        img.addEventListener("error", function () {
          hideSlideSpinner(spin);
        });
        if (img.complete && img.naturalWidth) {
          hideSlideSpinner(spin);
        }
        inner.appendChild(spin);
        inner.appendChild(img);
        fig.appendChild(inner);
        track.appendChild(fig);
      });
      requestAnimationFrame(function () {
        requestAnimationFrame(function () {
          if (modal.hidden || token !== loadToken) return;
          setSlideWidths();
          go(0);
        });
      });
    }

    function lockScroll() {
      document.body.style.overflow = "hidden";
    }

    function unlockScroll() {
      document.body.style.overflow = "";
    }

    function closeModal() {
      if (modal.hidden) return;
      modal.hidden = true;
      galleryOpen = false;
      unlockScroll();
      clearGallery();
      spinnerLayer.hidden = false;
      spinnerLayer.classList.remove("pg-modal__spinner-layer--error");
      spinnerText.textContent = "Загрузка фотографий…";
      galleryEl.hidden = true;
      counterEl.hidden = true;
      ledeEl.innerHTML = "";
      ledeEl.hidden = true;
      document.removeEventListener("keydown", onDocKey);
      window.removeEventListener("resize", onResize);
      if (lastFocus && typeof lastFocus.focus === "function") {
        lastFocus.focus();
      }
    }

    function onDocKey(e) {
      if (modal.hidden) return;
      if (e.key === "Escape") {
        e.preventDefault();
        closeModal();
        return;
      }
      if (e.key === "ArrowLeft" && !galleryEl.hidden) {
        e.preventDefault();
        go(index - 1);
      }
      if (e.key === "ArrowRight" && !galleryEl.hidden) {
        e.preventDefault();
        go(index + 1);
      }
    }

    var rafResize;
    function onResize() {
      cancelAnimationFrame(rafResize);
      rafResize = requestAnimationFrame(function () {
        if (!galleryOpen || galleryEl.hidden) return;
        setSlideWidths();
        applyTransform();
        syncGalleryUi();
      });
    }

    function openModal(projectId, titleText) {
      var token = ++loadToken;
      lastFocus = document.activeElement;
      titleEl.textContent = titleText;
      ledeEl.innerHTML = "";
      ledeEl.hidden = true;
      spinnerLayer.hidden = false;
      spinnerLayer.classList.remove("pg-modal__spinner-layer--error");
      spinnerText.textContent = "Загрузка фотографий…";
      galleryEl.hidden = true;
      counterEl.hidden = true;
      clearGallery();
      modal.hidden = false;
      galleryOpen = true;
      lockScroll();
      document.addEventListener("keydown", onDocKey);
      window.addEventListener("resize", onResize);
      if (closeBtn && typeof closeBtn.focus === "function") {
        closeBtn.focus();
      }

      simulateAjaxProjectGallery(projectId)
        .then(function (res) {
          return res.json();
        })
        .then(function (data) {
          if (modal.hidden || token !== loadToken) return;
          if (data && data.images && data.images.length) {
            setLede(data.lede);
            spinnerLayer.hidden = true;
            galleryEl.hidden = false;
            counterEl.hidden = data.images.length < 2;
            renderGallery(data.images, token);
          } else {
            spinnerLayer.classList.add("pg-modal__spinner-layer--error");
            spinnerText.textContent = "Для этого объекта пока нет фотографий.";
          }
        })
        .catch(function () {
          if (modal.hidden || token !== loadToken) return;
          spinnerLayer.classList.add("pg-modal__spinner-layer--error");
          spinnerText.textContent = "Не удалось загрузить галерею. Попробуйте позже.";
        });
    }

    modal.querySelectorAll("[data-pg-close]").forEach(function (el) {
      el.addEventListener("click", function () {
        closeModal();
      });
    });

    prevBtn.addEventListener("click", function () {
      go(index - 1);
    });
    nextBtn.addEventListener("click", function () {
      go(index + 1);
    });

    var touchStartX = 0;
    viewport.addEventListener(
      "touchstart",
      function (e) {
        if (e.touches.length !== 1) return;
        touchStartX = e.touches[0].clientX;
      },
      { passive: true }
    );
    viewport.addEventListener(
      "touchend",
      function (e) {
        if (!galleryOpen || galleryEl.hidden || n < 2) return;
        var dx = e.changedTouches[0].clientX - touchStartX;
        if (dx > 56) go(index - 1);
        else if (dx < -56) go(index + 1);
      },
      { passive: true }
    );

    document.querySelectorAll("#projects .project__preview").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var card = btn.closest(".project");
        if (!card) return;
        var id = card.getAttribute("data-project-id");
        var t = card.querySelector(".project__title");
        var titleText = (t && t.textContent) || "Объект";
        if (!id) return;
        openModal(id, titleText);
      });
    });
  })();

})();
