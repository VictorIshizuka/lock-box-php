# 🔐 LockBox

Sistema seguro de gerenciamento de notas privadas com criptografia, arquitetura MVC organizada e estrutura moderna em PHP 8.4.

Projeto desenvolvido como evolução direta do Manager Movie, agora com foco em organização estrutural, boas práticas (PSR-12), segurança e escalabilidade de código.

---

## 📖 Sobre o Projeto

O **LockBox** é uma aplicação para armazenamento seguro de notas pessoais, onde cada registro é criptografado antes de ser persistido no banco.

A proposta principal do projeto é demonstrar uma evolução arquitetural significativa em relação à versão anterior, adotando:

* Estrutura MVC mais bem definida
* Autoload com Composer (PSR-4)
* Middlewares
* Controle de rotas mais robusto
* Organização de camadas (Request, Session, Controllers, Models)
* Segurança aplicada com criptografia real usando OpenSSL

---

## 🏗 Arquitetura

O projeto segue uma estrutura MVC organizada:

<pre class="overflow-visible! px-0!" data-start="1143" data-end="1339"><div class="relative w-full my-4"><div class=""><div class="relative"><div class="h-full min-h-0 min-w-0"><div class="h-full min-h-0 min-w-0"><div class="border border-token-border-light border-radius-3xl corner-superellipse/1.1 rounded-3xl"><div class="h-full w-full border-radius-3xl bg-token-bg-elevated-secondary corner-superellipse/1.1 overflow-clip rounded-3xl lxnfua_clipPathFallback"><div class="pointer-events-none absolute inset-x-4 top-12 bottom-4"><div class="pointer-events-none sticky z-40 shrink-0 z-1!"><div class="sticky bg-token-border-light"></div></div></div><div class=""><div class="relative z-0 flex max-w-full"><div id="code-block-viewer" dir="ltr" class="q9tKkq_viewer cm-editor z-10 light:cm-light dark:cm-light flex h-full w-full flex-col items-stretch ͼk ͼy"><div class="cm-scroller"><div class="cm-content q9tKkq_readonly"><span>app/</span><br/><span> ├── Controllers/</span><br/><span> ├── Models/</span><br/><span> ├── Views/</span><br/><span> │    ├── components/</span><br/><span> ├── Core/</span><br/><span> │    ├── Router</span><br/><span> │    ├── Request</span><br/><span> │    ├── Session</span><br/><span> │    ├── Middleware</span><br/><span> ├── Middlewares/</span><br/><span>public/</span><br/><span>vendor/</span></div></div></div></div></div></div></div></div></div><div class=""><div class=""></div></div></div></div></div></pre>

### 🔹 MVC Organizado

* **Models** → Responsáveis pela regra de negócio e acesso a dados.
* **Controllers** → Orquestram fluxo da aplicação.
* **Views** → Componentizadas para manter o HTML limpo e reutilizável.
* **Components** → Fragmentos reutilizáveis como cards, alerts, layout, etc.

---

## ⚙️ Stack e Tecnologias

* **PHP 8.4**
* **Composer (PSR-4 Autoload)**
* **PSR-12**
* **Laravel Pint** (padronização automática de código)
* **SQLite**
* **DaisyUI + TailwindCSS**
* **nesbot/carbon**
* **OpenSSL (openssl_encrypt / openssl_decrypt)**

---

## 🔐 Segurança

### Criptografia de Notas

As notas são criptografadas antes de serem salvas:

<pre class="overflow-visible! px-0!" data-start="1991" data-end="2022"><div class="relative w-full my-4"><div class=""><div class="relative"><div class="h-full min-h-0 min-w-0"><div class="h-full min-h-0 min-w-0"><div class="border border-token-border-light border-radius-3xl corner-superellipse/1.1 rounded-3xl"><div class="h-full w-full border-radius-3xl bg-token-bg-elevated-secondary corner-superellipse/1.1 overflow-clip rounded-3xl lxnfua_clipPathFallback"><div class="pointer-events-none absolute inset-x-4 top-12 bottom-4"><div class="pointer-events-none sticky z-40 shrink-0 z-1!"><div class="sticky bg-token-border-light"></div></div></div><div class=""><div class="relative z-0 flex max-w-full"><div id="code-block-viewer" dir="ltr" class="q9tKkq_viewer cm-editor z-10 light:cm-light dark:cm-light flex h-full w-full flex-col items-stretch ͼk ͼy"><div class="cm-scroller"><div class="cm-content q9tKkq_readonly"><span>openssl_encrypt(...)</span></div></div></div></div></div></div></div></div></div><div class=""><div class=""></div></div></div></div></div></pre>

A chave é controlada via variável de ambiente (`.env`).

Isso garante que:

* Mesmo com acesso direto ao banco, o conteúdo não esteja legível.
* A descriptografia aconteça apenas na camada de aplicação.

---

## 🧩 Camadas Internas

### 📌 Router

Sistema de rotas mais robusto, suportando múltiplos métodos HTTP:

* GET
* POST
* PUT
* DELETE

Separação clara entre definição de rota e execução de controller.

---

### 📌 Middlewares

Implementação de middlewares:

* `AuthMiddleware`
* `GuestMiddleware`

Permite controle de acesso antes da execução do controller.

---

### 📌 Request & Session

Classes dedicadas para:

* Manipulação segura de dados da requisição
* Gerenciamento de sessão
* Abstração de superglobais (`$_POST`, `$_SESSION`, etc.)

Evitando acoplamento direto com variáveis globais.

---

## 🧠 Evolução em relação ao projeto anterior

Comparado ao Manager Movie, esta versão evolui em:

* Uso de Composer com autoload PSR-4
* Configuração via `.env`
* Separação mais clara de responsabilidades
* Introdução de Middlewares
* Organização do Core da aplicação
* Padronização de código com Laravel Pint
* Uso consistente do Carbon para datas
* Criptografia real aplicada ao domínio

---

## 📦 Funcionalidades

* 🔐 Autenticação com `password_hash` e `password_verify`
* 🗂 CRUD de notas
* 🔒 Criptografia automática ao salvar
* ⏳ Datas humanizadas com Carbon
* 🎨 Interface moderna com DaisyUI
* 🧱 Componentização de layout

---

## 🛠 Como rodar o projeto

### 1️⃣ Clone o repositório

<pre class="overflow-visible! px-0!" data-start="3566" data-end="3609"><div class="relative w-full my-4"><div class=""><div class="relative"><div class="h-full min-h-0 min-w-0"><div class="h-full min-h-0 min-w-0"><div class="border border-token-border-light border-radius-3xl corner-superellipse/1.1 rounded-3xl"><div class="h-full w-full border-radius-3xl bg-token-bg-elevated-secondary corner-superellipse/1.1 overflow-clip rounded-3xl lxnfua_clipPathFallback"><div class="pointer-events-none absolute inset-x-4 top-12 bottom-4"><div class="pointer-events-none sticky z-40 shrink-0 z-1!"><div class="sticky bg-token-border-light"></div></div></div><div class=""><div class="relative z-0 flex max-w-full"><div id="code-block-viewer" dir="ltr" class="q9tKkq_viewer cm-editor z-10 light:cm-light dark:cm-light flex h-full w-full flex-col items-stretch ͼk ͼy"><div class="cm-scroller"><div class="cm-content q9tKkq_readonly"><span class="ͼs">git</span><span> clone https://github.com/VictorIshizuka/lock-box-php.git</span><br/><span class="ͼs">cd</span><span> lock-box-php</span></div></div></div></div></div></div></div></div></div><div class=""><div class=""></div></div></div></div></div></pre>

### 2️⃣ Instale dependências

<pre class="overflow-visible! px-0!" data-start="3641" data-end="3669"><div class="relative w-full my-4"><div class=""><div class="relative"><div class="h-full min-h-0 min-w-0"><div class="h-full min-h-0 min-w-0"><div class="border border-token-border-light border-radius-3xl corner-superellipse/1.1 rounded-3xl"><div class="h-full w-full border-radius-3xl bg-token-bg-elevated-secondary corner-superellipse/1.1 overflow-clip rounded-3xl lxnfua_clipPathFallback"><div class="pointer-events-none absolute inset-x-4 top-12 bottom-4"><div class="pointer-events-none sticky z-40 shrink-0 z-1!"><div class="sticky bg-token-border-light"></div></div></div><div class=""><div class="relative z-0 flex max-w-full"><div id="code-block-viewer" dir="ltr" class="q9tKkq_viewer cm-editor z-10 light:cm-light dark:cm-light flex h-full w-full flex-col items-stretch ͼk ͼy"><div class="cm-scroller"><div class="cm-content q9tKkq_readonly"><span>composer install</span></div></div></div></div></div></div></div></div></div><div class=""><div class=""></div></div></div></div></div></pre>

### 3️⃣ Configure o .env

Crie um arquivo `.env` baseado no `env`:

<pre class="overflow-visible! px-0!" data-start="3748" data-end="3781"><div class="relative w-full my-4"><div class=""><div class="relative"><div class="h-full min-h-0 min-w-0"><div class="h-full min-h-0 min-w-0"><div class="border border-token-border-light border-radius-3xl corner-superellipse/1.1 rounded-3xl"><div class="h-full w-full border-radius-3xl bg-token-bg-elevated-secondary corner-superellipse/1.1 overflow-clip rounded-3xl lxnfua_clipPathFallback"><div class="pointer-events-none absolute inset-x-4 top-12 bottom-4"><div class="pointer-events-none sticky z-40 shrink-0 z-1!"><div class="sticky bg-token-border-light"></div></div></div><div class=""><div class="relative z-0 flex max-w-full"><div id="code-block-viewer" dir="ltr" class="q9tKkq_viewer cm-editor z-10 light:cm-light dark:cm-light flex h-full w-full flex-col items-stretch ͼk ͼy"><div class="cm-scroller"><div class="cm-content q9tKkq_readonly"><span>ENCRYPT_FIRST_KEY=sua_chave_secreta</span> <br><span>ENCRYPT_SECOND_KEY=sua_chave_secreta</span></div></div></div></div></div></div></div></div></div><div class=""><div class=""></div></div></div></div></div></pre>

### 4️⃣ Suba o servidor

<pre class="overflow-visible! px-0!" data-start="3808" data-end="3852"><div class="relative w-full my-4"><div class=""><div class="relative"><div class="h-full min-h-0 min-w-0"><div class="h-full min-h-0 min-w-0"><div class="border border-token-border-light border-radius-3xl corner-superellipse/1.1 rounded-3xl"><div class="h-full w-full border-radius-3xl bg-token-bg-elevated-secondary corner-superellipse/1.1 overflow-clip rounded-3xl lxnfua_clipPathFallback"><div class="pointer-events-none absolute inset-x-4 top-12 bottom-4"><div class="pointer-events-none sticky z-40 shrink-0 z-1!"><div class="sticky bg-token-border-light"></div></div></div><div class=""><div class="relative z-0 flex max-w-full"><div id="code-block-viewer" dir="ltr" class="q9tKkq_viewer cm-editor z-10 light:cm-light dark:cm-light flex h-full w-full flex-col items-stretch ͼk ͼy"><div class="cm-scroller"><div class="cm-content q9tKkq_readonly"><span>php </span><span class="ͼu">-S</span><span> localhost:8000 </span><span class="ͼu">-t</span><span> public/</span></div></div></div></div></div></div></div></div></div><div class=""><div class=""></div></div></div></div></div></pre>

Acesse:

<pre class="overflow-visible! px-0!" data-start="3863" data-end="3892"><div class="relative w-full my-4"><div class=""><div class="relative"><div class="h-full min-h-0 min-w-0"><div class="h-full min-h-0 min-w-0"><div class="border border-token-border-light border-radius-3xl corner-superellipse/1.1 rounded-3xl"><div class="h-full w-full border-radius-3xl bg-token-bg-elevated-secondary corner-superellipse/1.1 overflow-clip rounded-3xl lxnfua_clipPathFallback"><div class="pointer-events-none absolute inset-x-4 top-12 bottom-4"><div class="pointer-events-none sticky z-40 shrink-0 z-1!"><div class="sticky bg-token-border-light"></div></div></div><div class=""><div class="relative z-0 flex max-w-full"><div id="code-block-viewer" dir="ltr" class="q9tKkq_viewer cm-editor z-10 light:cm-light dark:cm-light flex h-full w-full flex-col items-stretch ͼk ͼy"><div class="cm-scroller"><div class="cm-content q9tKkq_readonly"><span>http://localhost:8000</span></div></div></div></div></div></div></div></div></div><div class=""><div class=""></div></div></div></div></div></pre>

---

## 🧼 Padronização de Código

Para manter o padrão PSR-12:

<pre class="overflow-visible! px-0!" data-start="3959" data-end="3988"><div class="relative w-full my-4"><div class=""><div class="relative"><div class="h-full min-h-0 min-w-0"><div class="h-full min-h-0 min-w-0"><div class="border border-token-border-light border-radius-3xl corner-superellipse/1.1 rounded-3xl"><div class="h-full w-full border-radius-3xl bg-token-bg-elevated-secondary corner-superellipse/1.1 overflow-clip rounded-3xl lxnfua_clipPathFallback"><div class="pointer-events-none absolute inset-x-4 top-12 bottom-4"><div class="pointer-events-none sticky z-40 shrink-0 z-1!"><div class="sticky bg-token-border-light"></div></div></div><div class=""><div class="relative z-0 flex max-w-full"><div id="code-block-viewer" dir="ltr" class="q9tKkq_viewer cm-editor z-10 light:cm-light dark:cm-light flex h-full w-full flex-col items-stretch ͼk ͼy"><div class="cm-scroller"><div class="cm-content q9tKkq_readonly"><span>./vendor/bin/pint</span></div></div></div></div></div></div></div></div></div><div class=""><div class=""></div></div></div></div></div></pre>

---

## 👨‍💻 Autor

Victor Ishizuka

Desenvolvedor focado em construir aplicações PHP organizadas, seguras e arquiteturalmente bem estruturadas, priorizando clareza de código e evolução contínua.
