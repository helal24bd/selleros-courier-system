# Overview

# 

# SellerOS is designed with a scalable courier architecture so developers can:

# 

# Integrate multiple couriers

# Switch active courier dynamically

# Create parcels automatically

# Track live delivery status

# Handle webhook updates

# Build fraud detection systems

# Add future courier providers easily

# 

# Supported couriers:

# 

# Steadfast

# Pathao

# REDX

# CarryBee

# Paperfly

# Custom Courier

# Core Architecture

# Customer Places Order

# &#x20;       ↓

# Order Stored In Database

# &#x20;       ↓

# Seller Clicks "Move To Courier"

# &#x20;       ↓

# CourierOrderController

# &#x20;       ↓

# CourierManager

# &#x20;       ↓

# Detect Active Courier

# &#x20;       ↓

# Call Specific Courier Service

# &#x20;       ↓

# Courier API Request

# &#x20;       ↓

# Save Tracking / Consignment / Response

# &#x20;       ↓

# Webhook Updates Order Status

# Folder Structure

# app/

# ├── Services/

# │   └── Couriers/

# │       ├── Contracts/

# │       │   └── CourierInterface.php

# │       ├── CourierManager.php

# │       ├── SteadfastCourierService.php

# │       ├── PathaoCourierService.php

# │       ├── RedxCourierService.php

# │       ├── CarrybeeCourierService.php

# │       └── PaperflyCourierService.php

# │

# ├── Http/

# │   └── Controllers/

# │       ├── Seller/

# │       │   └── CourierOrderController.php

# │       └── Webhooks/

# │           ├── SteadfastWebhookController.php

# │           ├── PathaoWebhookController.php

# │           ├── RedxWebhookController.php

# │           ├── CarrybeeWebhookController.php

# │           └── PaperflyWebhookController.php

# Courier Manager

# 

# The CourierManager is responsible for:

# 

# Detecting active courier

# Routing requests to correct courier service

# Keeping controller clean

# Maintaining scalable architecture

# 

# Example:

# 

# $manager = new CourierManager();

# 

# 

# $manager->createParcel($order);

# Courier Interface

# 

# Every courier service follows the same contract.

# 

# interface CourierInterface

# {

# &#x20;   public function createParcel($order): array;

# 

# 

# &#x20;   public function trackParcel(string $trackingId): array;

# 

# 

# &#x20;   public function cancelParcel(string $trackingId): array;

# }

# 

# This allows easy switching between couriers.

# 

# Courier Specific Authentication

# Steadfast

# 

# Authentication:

# 

# API Key

# Secret Key

# 

# Features:

# 

# Create parcel

# Track parcel

# Delivery status

# COD support

# Pathao

# 

# Authentication:

# 

# Client ID

# Client Secret

# Username

# Password

# 

# Features:

# 

# OAuth token system

# Area APIs

# Parcel create

# Tracking

# Webhook support

# REDX

# 

# Authentication:

# 

# API Token

# 

# Features:

# 

# Parcel create

# Tracking

# Charge calculation

# Webhooks

# Area APIs

# CarryBee

# 

# Authentication:

# 

# Client ID

# Client Secret

# Client Context

# 

# Features:

# 

# Single order create

# Bulk order create

# Reverse pickup

# Webhooks

# Area APIs

# Fraud analysis support

# Paperfly

# 

# Authentication:

# 

# API credentials

# Merchant credentials

# Tracking support

# 

# Features:

# 

# Parcel create

# Parcel tracking

# Delivery updates

# Webhooks

# Database Structure

# couriers table

# id

# store\_id

# name

# slug

# api\_url

# api\_key

# secret\_key

# client\_id

# client\_secret

# username

# password

# token

# merchant\_id

# store\_id\_key

# phone

# extra\_fields

# is\_active

# status

# created\_at

# updated\_at

# orders table courier fields

# courier\_name

# tracking\_id

# consignment\_id

# courier\_status

# courier\_response

# sent\_to\_courier\_at

# courier\_delivery\_charge

# courier\_cash\_collection

# courier\_order\_id

# Webhook System

# 

# Each courier sends delivery status updates automatically.

# 

# Example webhook flow:

# 

# Courier Delivered Parcel

# &#x20;       ↓

# Courier Sends Webhook

# &#x20;       ↓

# Webhook Controller Receives Request

# &#x20;       ↓

# Order Status Updated Automatically

# 

# Example statuses:

# 

# pending

# picked

# in\_transit

# out\_for\_delivery

# delivered

# partial\_delivery

# returned

# cancelled

# failed

# Fraud Detection System

# 

# SellerOS courier architecture supports fraud analysis.

# 

# Possible fraud indicators:

# 

# High return rate

# High cancel rate

# Multiple failed deliveries

# COD abuse

# Fake orders

# 

# Example:

# 

# fraud\_score =

# (return\_orders \* 30)

# \+ (cancel\_orders \* 20)

# \+ (failed\_orders \* 25);

# 

# Risk levels:

# 

# 0-20     = Safe

# 20-50    = Medium Risk

# 50+      = High Risk

# Multi Theme Compatibility

# 

# Courier system is fully theme-independent.

# 

# Themes should only display:

# 

# $order->tracking\_id

# $order->courier\_status

# $order->consignment\_id

# 

# Business logic remains inside service layer.

# 

# Adding New Courier

# 

# To add a new courier:

# 

# Step 1

# 

# Create new service:

# 

# app/Services/Couriers/NewCourierService.php

# Step 2

# 

# Implement interface:

# 

# implements CourierInterface

# Step 3

# 

# Register inside:

# 

# CourierManager.php

# Step 4

# 

# Create webhook controller.

# 

# Step 5

# 

# Add courier settings UI.

# 

# Environment Variables

# 

# Never upload real API credentials to GitHub.

# 

# Use .env:

# 

# STEADFAST\_API\_KEY=

# STEADFAST\_SECRET\_KEY=

# 

# 

# PATHAO\_CLIENT\_ID=

# PATHAO\_CLIENT\_SECRET=

# PATHAO\_USERNAME=

# PATHAO\_PASSWORD=

# 

# 

# REDX\_API\_TOKEN=

# 

# 

# CARRYBEE\_CLIENT\_ID=

# CARRYBEE\_CLIENT\_SECRET=

# CARRYBEE\_CLIENT\_CONTEXT=

# 

# 

# PAPERFLY\_USERNAME=

# PAPERFLY\_PASSWORD=

# PAPERFLY\_API\_KEY=

# Recommended Future Features

# Auto courier selection

# Courier analytics

# Delivery success rate analysis

# AI courier recommendation

# Auto SMS confirmation

# Auto voice confirmation

# COD risk scoring

# Seller performance dashboard

# Fraud blacklist system

# Delivery heatmap analytics

# Recommended GitHub Structure

# docs/

# └── couriers/

# &#x20;   ├── README.md

# &#x20;   ├── steadfast.md

# &#x20;   ├── pathao.md

# &#x20;   ├── redx.md

# &#x20;   ├── carrybee.md

# &#x20;   ├── paperfly.md

# &#x20;   ├── webhook-events.md

# &#x20;   └── database-structure.md

# Developer Notes

# Keep courier logic separate from themes.

# Never hardcode courier credentials.

# Use service layer for scalability.

# Use webhooks whenever available.

# Store raw API response for debugging.

# Maintain common status mapping.

# Always validate courier ownership by store.

# SellerOS Goal

# 

# SellerOS aims to become a scalable:

# 

# Multi-vendor SaaS platform

# Courier automation system

# Fraud detection platform

# Delivery intelligence system

# 

# Built with:

# 

# Laravel

# MySQL

# Service-based architecture

# API-first design

# Multi-theme support

# Multi-courier support

# License

# 

# MIT License

# 

# Maintainer

# 

# SellerOS Team

