-- Table: public.friends

-- DROP TABLE public.friends;

CREATE TABLE public.friends
(
    "user" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    friend character varying(50) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT friends_pkey PRIMARY KEY ("user", friend),
    CONSTRAINT friend_id UNIQUE (friend),
    CONSTRAINT user_id UNIQUE ("user"),
    CONSTRAINT friend FOREIGN KEY (friend)
        REFERENCES public.members (username) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT "user" FOREIGN KEY ("user")
        REFERENCES public.members (username) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.friends